 

@extends('portal.layout.app')
@section('title', 'Dashboard')

@section('content')
          <!-- Start Main Content Area -->
            <main class="main-content-wrap style-two">
                <!-- Start Overview Back Area -->
                <div class="overview-content-area">
                    <div class="container-fluid">
                       <div class="d-flex justify-content-between" style="border-bottom:1px solid gray; margin-bottom:10px">
                        <h3>Dashboard</h3>
                        <div class="d-flex">
                            <a href="#" class="mx-1">Home</a>
                            /
                            <a href="#" class="mx-1">Dashboard</a>
                             
                           
                        </div>

                       </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-audience">
                                    <div class="audience-content">
                                        <h5>Total Users</h5>
                                        <h4>{{$totalUsers}} 
                                            {{-- <span>All System users</span> --}}
                                        </h4>
                                    </div>
                                    <div class="icon">
                                        <img src="assets/images/icon/note-2.svg" alt="white-profile-2user">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-audience d-flex justify-content-between align-items-center">
                                    <div class="audience-content">
                                        <h5>Total Conversation</h5>
                                        <h4>{{$TotalConversation}}
                                            {{-- <span>Conversations count of users</span> --}}
                                        
                                        </h4>
                                    </div>
                                    <div class="icon">
                                        <img src="assets/images/icon/user-2.svg" alt="eye">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-audience d-flex justify-content-between align-items-center">
                                    <div class="audience-content">
                                        <h5>Images Generated</h5>
                                        <h4>{{$ImagesGenerated}}  
                                            {{-- <span class="red">Total images generated</span> --}}
                                        </h4>

                                    </div>
                                    <div class="icon">
                                        <img src="assets/images/icon/people.svg" alt="timer">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-audience d-flex justify-content-between align-items-center">
                                    <div class="audience-content">
                                        <h5>User Groups</h5>
                                        <h4>{{$UserGroups}} 
                                            {{-- <span class="red">Groups created by admin</span> --}}
                                        </h4>
                                    </div>
                                    <div class="icon">
                                        <img src="assets/images/icon/profile-2.svg" alt="mask">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Overview Back Area -->

                <!-- Start Employees Info Chart Area -->
                <div class="employees-chart-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="employees-chart-wrap card-box-style rounded rounded-30">
                                    <div class="employees-content d-flex justify-content-between align-items-center">
                                        <div class="overview-title">
                                            <h3>Daily system usage</h3>
                                            <span>1 July, 2021 - 14 July, 2021</span>
                                        </div>

                                        {{-- <ul class="total-overview">
                                            <li>
                                                <button class="today">Today</button>
                                            </li>
                                            <li>
                                                <button>7d</button>
                                            </li>
                                            <li>
                                                <button class="active">2w</button>
                                            </li>
                                            <li>
                                                <button>1m</button>
                                            </li>
                                            <li>
                                                <button>3m</button>
                                            </li>
                                            <li>
                                                <button>1y</button>
                                            </li>
                                        </ul> --}}
                                    </div>

                                    <div class="audience-content-wrap">
                                        <div class="audience-chart">
                                           <div id="overview_chart_3"></div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="row">
                                    <div class="col-xxl-6">
                                        <div class="total-employees-content card-box-style rounded rounded-30">
                                            <div class="main-title d-flex justify-content-between align-items-center">
                                                <h3>Total Employees</h3>
                                                <a href="#" class="view-btn">View All</a>
                                            </div>

                                            <div class="total-employees-chart text-center">
                                                <div id="employees_chart_3"></div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="single-employees border-style-5c31d6">
                                                        <span class="title">Total</span>
                                                        <h4>634 <span>Employees</span></h4>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="single-employees border-style-fec107">
                                                        <span class="title">Men</span>
                                                        <h4>19,202 <span>+32.50%</span></h4>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="single-employees border-style-4fcb8d">
                                                        <span class="title">Women</span>
                                                        <h4>502 <span>+2%</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6">
                                        <div class="employees-availability-content-wrap availability card-box-style rounded rounded-30">
                                            <div class="employees-availability-content">
                                                <div class="main-title d-flex justify-content-between align-items-center">
                                                    <h3>Employees Availability</h3>

                                                    <select class="form-select form-control" aria-label="Default select example">
                                                        <option selected>30 days</option>
                                                        <option value="1">15 days</option>
                                                        <option value="2">10 days</option>
                                                        <option value="3">5 days</option>
                                                    </select>
                                                </div>

                                                <div class="row justify-content-center">
                                                    <div class="col-lg-12 col-sm-6 col-md-4">
                                                        <div class="single-employees-availability d-flex justify-content-between align-items-center">
                                                            <div class="employees-availability-content">
                                                                <h5>Attendance</h5>
                                                                <h4>24.67% <span>+04.18%</span></h4>
                                                            </div>
                                                            <div class="employees-chart">
                                                                <div id="attendance_chart"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-6 col-md-4">
                                                        <div class="single-employees-availability d-flex justify-content-between align-items-center">
                                                            <div class="employees-availability-content color-style-fe5957">
                                                                <h5>Late Coming</h5>
                                                                <h4>7.32% <span>-0.21%</span></h4>
                                                            </div>
                                                            <div class="employees-chart">
                                                                <div id="late_coming"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-6 col-md-4">
                                                        <div class="single-employees-availability d-flex justify-content-between align-items-center">
                                                            <div class="employees-availability-content">
                                                                <h5>Absent</h5>
                                                                <h4>34 <span>+2.50%</span></h4>
                                                            </div>
                                                            <div class="employees-chart">
                                                                <div id="absent_chart"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="total-hiring-sources-wrap">
                                    <div class="row">
                                        <div class="col-xxl-8">
                                            <div class="total-hiring-sources-content">
                                                <div class="main-title d-flex justify-content-between align-items-center">
                                                    <h3>Employees Availability</h3>

                                                    <select class="form-select form-control" aria-label="Default select example">
                                                        <option selected>7 days</option>
                                                        <option value="1">15 days</option>
                                                        <option value="2">10 days</option>
                                                        <option value="3">5 days</option>
                                                    </select>
                                                </div>

                                                <div id="total_hiring_chart"></div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="single-hiring border-style-4fcb8d">
                                                            <span class="title">UI/UX Design</span>
                                                            <h4>35% <span>(Avg)</span></h4>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="single-hiring border-style-1765fd">
                                                            <span class="title">Web Development</span>
                                                            <h4>45% <span>(Avg)</span></h4>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="single-hiring border-style-5c31d6">
                                                            <span class="title">App Development</span>
                                                            <h4>15% <span>(Avg)</span></h4>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="single-hiring border-style-fec107">
                                                            <span class="title">Product Manager</span>
                                                            <h4>25% <span>(Avg)</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4">
                                            <div class="send-invitation-content card-box-style rounded rounded-30">
                                                <h3>Send Invitation</h3>
                                                <form class="invitation-form">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Enter email address">
                                                        <button type="submit" class="invitation-btn">Send Invitation</button>
                                                    </div>
                                                </form>

                                                <h4>Quick Send Email</h4>
                                                <p>Lorem ipsum dolor sit amet, consete tur sadipscing elitr, sed diam.</p>

                                                <div class="invitation-content d-flex justify-content-between align-items-center">
                                                    <ul class="group-img">
                                                        <li>
                                                            <a href="#">
                                                                <img src="assets/images/group/group-1.png" alt="group-1">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="assets/images/group/group-2.png" alt="group-2">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="assets/images/group/group-3.png" alt="group-3">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="assets/images/group/group-4.png" alt="group-4">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="total-man">
                                                                <img src="assets/images/group/group-5.png" alt="group-5">
                                                                <span>32+</span>
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <a href="#" class="view-all">
                                                        View All
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>

                            {{-- <div class="col-lg-4">
                                <div class="upcoming-interview-content card-box-style rounded rounded-30">
                                    <div class="main-title border-style d-flex justify-content-between align-items-center">
                                        <h3>Upcoming Interviews</h3>
                                        <a href="#" class="view-btn">View All</a>
                                    </div>

                                    <ul class="interviews-wrap">
                                        <li class="single-interview d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/interview/interview-1.jpg" alt="interview-1">
                                                <div class="interview-info ms-2">
                                                    <h4>Anderson Coopers</h4>
                                                    <span>11:00 AM - 01:30 PM</span>
                                                </div>
                                            </div>
                                            <a href="#" class="call-btn">Make Call</a>
                                        </li>

                                        <li class="single-interview d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/interview/interview-2.jpg" alt="interview-1">
                                                <div class="interview-info ms-2">
                                                    <h4>Anderson Coopers</h4>
                                                    <span>11:00 AM - 01:30 PM</span>
                                                </div>
                                            </div>
                                            <a href="#" class="call-btn">Make Call</a>
                                        </li>

                                        <li class="single-interview d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/interview/interview-3.jpg" alt="interview-1">
                                                <div class="interview-info ms-2">
                                                    <h4>Anderson Coopers</h4>
                                                    <span>11:00 AM - 01:30 PM</span>
                                                </div>
                                            </div>
                                            <a href="#" class="call-btn">Make Call</a>
                                        </li>

                                        <li class="single-interview d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/interview/interview-4.jpg" alt="interview-1">
                                                <div class="interview-info ms-2">
                                                    <h4>Anderson Coopers</h4>
                                                    <span>11:00 AM - 01:30 PM</span>
                                                </div>
                                            </div>
                                            <a href="#" class="call-btn">Make Call</a>
                                        </li>

                                        <li class="single-interview d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/interview/interview-5.jpg" alt="interview-1">
                                                <div class="interview-info ms-2">
                                                    <h4>Anderson Coopers</h4>
                                                    <span>11:00 AM - 01:30 PM</span>
                                                </div>
                                            </div>
                                            <a href="#" class="call-btn">Make Call</a>
                                        </li>
                                    </ul>

                                    <div class="calendar-wrap style-three">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- End Employees Info Chart Area -->

                <!-- Start Top Performers Area -->
                {{-- <div class="top-performers-area">
                    <div class="container-fluid">
                        <div class="top-performers-content-wrap card-box-style rounded rounded-30">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <div class="top-performers-content">
                                        <h3>Top Performers</h3>
                                        <p>Lorem ipsum dolor sit amet, consete tur sadipscing elitr, sed diam.</p>
                                        <ul>
                                            <li class="single-performers border-style-4fcb8d">
                                                <span class="title">New Task</span>
                                                <h4>304+</h4>
                                            </li>
                                            <li class="single-performers border-style-1765fd">
                                                <span class="title">Task Completed</span>
                                                <h4>150+</h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-9">
                                    <div class="performers-slider owl-carousel owl-theme">
                                        <div class="single-performers-card">
                                            <div class="performers-img d-flex align-items-center">
                                                <img src="assets/images/performers/performers-1.jpg" alt="performers-1">
                                                <div>
                                                    <span>1 st</span>
                                                    <h2>90%</h2>
                                                </div>
                                            </div>
                                            <h3>Anderson Coopers</h3>
                                            <span>@coopers</span>
                                        </div>

                                        <div class="single-performers-card">
                                            <div class="performers-img d-flex align-items-center">
                                                <img src="assets/images/performers/performers-2.jpg" alt="performers-2">
                                                <div>
                                                    <span>2 st</span>
                                                    <h2>85%</h2>
                                                </div>
                                            </div>
                                            <h3>Alex Dew</h3>
                                            <span>@alexdew</span>
                                        </div>

                                        <div class="single-performers-card">
                                            <div class="performers-img d-flex align-items-center">
                                                <img src="assets/images/performers/performers-3.jpg" alt="performers-3">
                                                <div>
                                                    <span>3 st</span>
                                                    <h2>80%</h2>
                                                </div>
                                            </div>
                                            <h3>Kilvas Smith</h3>
                                            <span>@kilvasmith</span>
                                        </div>

                                        <div class="single-performers-card">
                                            <div class="performers-img d-flex align-items-center">
                                                <img src="assets/images/performers/performers-4.jpg" alt="performers-4">
                                                <div>
                                                    <span>4 st</span>
                                                    <h2>78%</h2>
                                                </div>
                                            </div>
                                            <h3>Zeck Smith</h3>
                                            <span>@zecksmith</span>
                                        </div>

                                        <div class="single-performers-card">
                                            <div class="performers-img d-flex align-items-center">
                                                <img src="assets/images/performers/performers-5.jpg" alt="performers-5">
                                                <div>
                                                    <span>5 st</span>
                                                    <h2>75%</h2>
                                                </div>
                                            </div>
                                            <h3>Anne Mari</h3>
                                            <span>@annemari</span>
                                        </div>

                                        <div class="single-performers-card">
                                            <div class="performers-img d-flex align-items-center">
                                                <img src="assets/images/performers/performers-6.jpg" alt="performers-6">
                                                <div>
                                                    <span>6 st</span>
                                                    <h2>70%</h2>
                                                </div>
                                            </div>
                                            <h3>Juhon Smith</h3>
                                            <span>@juhonsmith</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- End Top Performers Area -->

                <!-- Start Footer Area -->
                <div class="footer-area">
                    <div class="container-fluid">
                        <div class="footer-content">
                            <p>© Joxi is Proudly Owned by <a href="bogglerbiz.learnunstoppable.com" target="_blank">Boggler</a></p>
                        </div>
                    </div>
                </div>
                <!-- End Footer Area -->
            </main>
@endsection
@section('page-js-script')
<script src="{{ asset('assets/js/apexcharts/apexcharts.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/apexcharts/tutor-lms.js') }}"></script> --}}


<script>
    (function($) {
    "use strict";

    // Home Three All Chart
    // Overview Chart 3
    var options = {
        chart: { 
            height: 230, 
            type: "area", 
            stacked: !0, 
            toolbar: { 
                show: !1, 
                autoSelected: "zoom" 
            } 
        },
        colors: [
            "#1765fd", 
            "#bbc6cf"
        ],
        dataLabels: { 
            enabled: !1 
        },
        stroke: { 
            curve: "smooth", 
            width: [5, 2], 
            dashArray: [0, 4], 
            lineCap: "round"
        },
        grid: { 
            padding: { 
                left: 0, 
                right: 0 
            }, 
            strokeDashArray: 1
        },
        markers: { 
            size: 0, 
            hover: { 
                size: 0 
            } 
        },
        series: [
            { name: "New Visits", data: @json($chartData['new_visit']) },
            { name: "Unique Visits", data:@json($chartData['unique_visit']) },
        ],
        xaxis: { 
            type: "month", 
            categories: @json($chartData['months']), 
            axisBorder: { 
                show: !0 
            }, 
            axisTicks: { 
                show: !0 
            } 
        },
        fill: { 
            type: "gradient", 
            gradient: { 
                shadeIntensity: 1, 
                opacityFrom: 0, 
                opacityTo: 0, 
                stops: [0, 90, 100] 
            } 
        },
        tooltip: { 
            x: { 
                format: "dd/MM/yy HH:mm" 
            } 
        },
        legend: { 
            position: "bottom", 
            horizontalAlign: "right",  
            show: false 
        },
    };
    (chart = new ApexCharts(
        document.querySelector("#overview_chart_3"), 
        options)
    );
    chart.render();

    // Works Stats
    options = { 
        series: [60, 40], 
        chart: { 
            type: "donut", 
            height: 300 
        }, 
        dataLabels: {
            enabled: false
          },
        labels: [
            "Taking Class", 
            "Lesson Discuss", 
            "Lesson Discuss"
        ], 
        colors: [
            "#4FCB8D", 
            "#1765FD", 
        ], 
        legend: { 
            show: !1 
        }, 
        plotOptions: { 
            pie: { 
                donut: { 
                    size: "60%" 
                } 
            } 
        } 
    };
    (chart = new ApexCharts(
        document.querySelector("#employees_chart_3"), 
        options
        )
    );
    chart.render();

    // Attendance Chart
    var options = {
        series: [
            { name: "Attendance", 
                data: [0, 50, 100, 50, 42, 150, 47, 75, 10, 100, 14] 
            }
        ],
        chart: { 
            type: "area", 
            height: 50, 
            sparkline: { 
                enabled: !0 
            } 
        },
        stroke: { 
            curve: "smooth", 
            width: 4,
            lineCap: "round" 
        },
        colors: [
            "#5C31D6"
        ],
        fill: { 
            type: "gradient", 
            gradient: { 
                shadeIntensity: 0, 
                inverseColors: !0, 
                opacityFrom: 0, 
                opacityTo: 0, 
                stops: [
                    75, 100, 100, 100
                ] 
            } 
        },
        tooltip: { 
            fixed: { 
                enabled: !1 
            }, 
            x: { 
                show: !1 
            }, 
            marker: { 
                show: !1 
            } 
        },
    },
    chart = new ApexCharts(
        document.querySelector("#attendance_chart"), 
        options
    );
    chart.render();

    
   

}(jQuery));
</script>
@endsection
