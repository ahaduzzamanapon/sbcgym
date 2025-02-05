<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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
        th,td{
            padding: 2px!important;
        }
    </style>
</head>
  <body>
      <div class="container">
          <a onclick="print_w()" class="btn btn-primary">Print</a>
          @foreach($job_card as $job)
          @php
              $member=$job['member_data'];
              $attendances=$job['attendences'];
          @endphp
            <div class="container">
                @include('reports_header')

                <h3 class="text-center mb-4">Job Card - {{ $member->mem_name }}</h3>

                <!-- Member Details -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 style="text-align: center;border-bottom: 2px solid;">Member Information</h4>
                        <div class="col-md-12">
                            <div style="display: flex;justify-content: space-evenly;">
                                <div class="">
                                    <span><strong>Member ID:</strong> {{ $member->member_unique_id }}</span><br>
                                    <span><strong>Name:</strong> {{ $member->mem_name }}</span><br>
                                    <span><strong>Gender:</strong> {{ $member->mem_gender }}</span><br>
                                    <span><strong>Address:</strong> {{ $member->mem_address }}</span><br>
                                </div>
                                <div class="">
                                    <span><strong>Admission Date:</strong> {{ date('d M, Y', strtotime($member->mem_admission_date)) }}</span><br>
                                    <span><strong>Date of Birth:</strong> {{ date('d M, Y', strtotime($member->date_of_birth)) }}</span><br>
                                    <span><strong>Phone:</strong> {{ $member->mem_cell }}</span><br>
                                    <span><strong>Email:</strong> {{ $member->mem_email }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Attendance Details -->
                <div class="card">
                    <div class="card-body">
                        <h4>Attendance Records</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>In Time</th>
                                    <th>Out Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $present=0;
                                    $absent=0;
                                @endphp
                                @foreach($attendances as $attendance)
                                @php
                                    if($attendance->status=='Present'){
                                        $present++;
                                    }else{
                                        $absent++;
                                    }
                                @endphp
                                <tr>
                                    <td>{{ date('d M, Y', strtotime($attendance->date)) }}</td>
                                    <td>{{ $attendance->in_time }}</td>
                                    <td>{{ $attendance->out_time ?? '-' }}</td>
                                    <td>{{ $attendance->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Total</th>
                                    <th>Present</th>
                                    <th>Absent</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $present+$absent }}</td>
                                    <td>{{ $present }}</td>
                                    <td>{{ $absent }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div style="page-break-after: always;"></div>
          @endforeach
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
