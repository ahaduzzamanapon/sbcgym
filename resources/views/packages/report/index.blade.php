@extends('layouts.default')

{{-- Page title --}}
@section('title')
Purchase Report @parent
@stop

@section('content')

<style>
.box_m {
    box-shadow: 0px 0px 6px 2px #bfbfbf;
    padding: 0px;
    height: 61vh;
    overflow-y: scroll;
}
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Purchase Report</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>

<!-- Main content -->
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="card" style="width: 88vw;">
        <section class="card-header">
            <h5 class="card-title d-inline"></h5>
        </section>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="">From date/First Date</label>
                            <input type="date" name="from_date" id="from_date" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">To date</label>
                            <input type="date" name="to_date" id="to_date" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Type</label>
                            <select name="member_type" id="member_type" class="form-control" onchange="get_member()">
                                <option value="">Please Select Member Type</option>
                                <option selected value="member">Member</option>
                                <option value="staff">Staff</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Branch</label>
                            <select name="branch_id" id="branch_id" class="form-control" onchange="get_member()">
                                @php
                                if(if_can('see_all_branch')){
                                    $multi_branchs = DB::table('multi_branchs')->get();
                                echo '<option value="">Please Select Branch Type</option>';
                                }else{
                                    $multi_branchs = DB::table('multi_branchs')->where('id', get_branch() )->get();
                                }
                                @endphp
                                @foreach ($multi_branchs as $multi_branch)
                                <option value="{{ $multi_branch->id }}">{{ $multi_branch->branch_name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="container mt-5">
                            <!-- Tab navigation -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Purchase Report</button>
                                </li>
                            </ul>
                            <!-- Tab content -->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row p-2" style="display: flex;flex-wrap: wrap;gap: 8px;">
                                        <a href="#" onclick="purchaseReport('daily')" class="btn btn-primary">Daily Purchase</a>
                                        <a href="#" onclick="purchaseReport('con')" class="btn btn-primary">Date Between Purchase</a>
                                        <a href="#" onclick="purchaseReport('single')" class="btn btn-primary">Single Member Purchase</a>
                                        <a href="#" onclick="purchaseReport('multi')" class="btn btn-primary">Multiple Member Purchase</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_m">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th width="7%" style="white-space: nowrap"><input type="checkbox" name="" id="select_all">Select</th>

                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">Please Select Member Type</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function get_checked_member_id() {
        var member_id = [];
        $('.member_id_c').each(function() {
            if ($(this).is(':checked')) {
                member_id.push($(this).val());
            }
        });

        return member_id;
    }

    $(document).ready(function() {
        get_member()
        $('#select_all').on('change', function() {
            if ($(this).is(':checked')) {
                $('.member_id_c').prop('checked', true);
            } else {
                $('.member_id_c').prop('checked', false);
            }
        });
    });



    function get_member() {
        var member_type = $('#member_type').val();
        var branch_id = $('#branch_id').val();
        $.ajax({
            url: "{{ route('attendences.get_member') }}",
            type: "GET",
            data: {
                '_token': "{{ csrf_token() }}",
                'member_type': member_type,
                'branch_id': branch_id
            },
            dataType: 'json',
            success: function(response) {
               var member = response.member;
               var html = '';
               if(member.length == 0) {
                   html+= '<tr><td colspan="2">No Member Found</td></tr>';
               }
               for (var i = 0; i < member.length; i++) {
                   html += '<tr><td><input type="checkbox" class="member_id_c" value="'+member[i].id+'"></td><td>'+member[i].mem_name+' ('+member[i].member_unique_id+')</td></tr>';
               }
               $('.table tbody').html(html);

            },
            error: function() {
            }
        });
    }

    function purchaseReport(type) {
        var fromDate = $('#from_date').val();
        var toDate = $('#to_date').val();
        var selectedMemberIds = getCheckedMemberIds();
        var branchId = $('#branch_id').val();

        if (selectedMemberIds.length === 0) {
            alert('Please select at least one member');
            return;
        }

        switch (type) {
            case 'daily':
                if (!fromDate) {
                    alert('Please select a from date');
                    return;
                }
                toDate = fromDate;
                break;
            case 'con':
                if (!fromDate) {
                    alert('Please select a from date');
                    return;
                }
                if (!toDate) {
                    alert('Please select a to date');
                    return;
                }
                break;
            case 'single':
                if (selectedMemberIds.length !== 1) {
                    alert('Please select a single member');
                    return;
                }
                break;
        }
        const url = new URL("{{ route('report.purchase_report_view') }}", window.location.origin);
        url.searchParams.set('from_date', fromDate);
        url.searchParams.set('to_date', toDate);
        url.searchParams.set('member_id', selectedMemberIds.join(','));
        url.searchParams.set('type', type);
        window.open(url.toString(), '_blank');    
    }
    function getCheckedMemberIds() {
        const checkedMemberIds = [];
        $('.member_id_c:checked').each(function() {
            checkedMemberIds.push($(this).val());
        });
        return checkedMemberIds;
    }
</script>
@endsection
