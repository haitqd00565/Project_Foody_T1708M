@extends('layout.admin-restaurant',['page_title'=>'Chart','active'=>''])
@section('content')
    <div class="row mb-5">
        <div class="col-md-8">
        </div>
        <div class="col-md-4">
            <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                <i class="fa fa-calendar"></i>&nbsp;
                <span></span> <i class="fa fa-caret-down"></i>
            </div>
        </div>
    </div>
    <canvas id="canvas" style="width: 200px; height: 100px;"></canvas>
    <canvas id="canvas1" width="200px" height="100px"></canvas>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            var start = moment().subtract(29, 'days');
            var end = moment();
            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);
            cb(start, end);
            $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
                var startDate = picker.startDate.format('YYYY-MM-DD');
                var endDate = picker.endDate.format('YYYY-MM-DD');
                var listOfDate = new Array();
                var revenueByDate = new Array();
                $.get('/admin/chart-demo?startDate='+ startDate + '&endDate=' + endDate, function (response) {
                    for (var i = 0; i < response.length; i++) {
                        listOfDate.push(response[i].day);
                        revenueByDate.push(response[i].revenue);
                    }
                    var ctx = document.getElementById("canvas").getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: listOfDate,
                            datasets: [{
                                label: 'Doanh thu từ ' + startDate + ' d?n ' + endDate,
                                data: revenueByDate,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                });
            });

        })
    </script>
@endsection