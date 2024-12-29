<!doctype html>
<html lang="en">
  <head>
    <title>Purchase Report</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .title{
            display: flex;
            flex-direction: column;
            align-items: center;
        } 
        @media print {
            .btn{
                display: none;
            }
        }   
    </style>
</head>
  <body>
      <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                       @include('reports_header')
                       <div class="title">Purchase Report</div>
                       <div style="text-align: right;color: white;">
                           <a onclick="print_w()" class="btn btn-primary">Print</a>
                       </div>
                    </div>

                </div>
                <div class="col-md-12">
                    @php
                        $data_found=false;
                    @endphp
                    @foreach ($member_details as $key => $member)
                      @php
                      
                        $purchasePackages = DB::table('purchasepackages')
                            ->select('purchasepackages.*', 'packages.pack_name as pack_name', 'members.mem_name as member_name')
                            ->join('packages', 'packages.id', '=', 'purchasepackages.package_id')
                            ->join('members', 'members.id', '=', 'purchasepackages.member_id')
                            ->where('purchasepackages.member_id', $member->id);
                        $purchasePackages = $purchasePackages->whereBetween('purchasepackages.created_at', [date('Y-m-d 00:00:00', strtotime($from_date)), date('Y-m-d 23:59:59', strtotime($to_date))]);
                        $purchasePackages = $purchasePackages->orderBy('purchasepackages.id', 'desc');
                        $purchasePackages = $purchasePackages->get();
                      @endphp
                        @if(isset($purchasePackages) && count($purchasePackages)>0)
                            @php
                                $data_found=true;
                            @endphp
                            @foreach ($purchasePackages as $key => $purchase)
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan="2">{{$purchase->member_name}}</th>
                                        </tr>
                                        <tr>
                                            <th>Package Name</th>
                                            <th>Expired Date</th>
                                            <th>Gross Amount</th>
                                            <th>Pay Amount</th>
                                            <th>Due Amount</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$purchase->pack_name}}</td>
                                            <td>{{$purchase->expired_date}}</td>
                                            <td>{{$purchase->gross_amount}}</td>
                                            <td>{{$purchase->pay_amount}}</td>
                                            <td>{{$purchase->due_amount}}</td>
                                            <td>{{$purchase->status}}</td>
                                            <td>{{$purchase->created_at}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach
                        @endif
                    @endforeach
                    @if($data_found==false)
                        <div class="alert alert-danger">No Data Found</div>
                    @endif
                </div>
            </div>
      </div>

    

    <script type="text/javascript">
        function print_w() {
            console.log("print");
            window.print();
        }
        setTimeout(() => {
            window.stop();
        }, 500);
    </script>
</body>
</html>
