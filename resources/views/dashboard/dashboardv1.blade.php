@extends('layouts.master')
@section('main-content')
           <div class="breadcrumb">
                <h1>Persona</h1>
                <ul>
                    <!-- <li><a href="">App</a></li> -->
                    <li>Dashboard</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <!-- ICON BG -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Add-User"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0 text-left">Total Leads Registered</p>
                                <p class="text-primary text-24 line-height-1 mb-2">205</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Map2"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0 text-left">Unknown Stations</p>
                                <p class="text-primary text-24 line-height-1 mb-2">4221</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Statistic"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0 text-left">Recruitment Average</p>
                                <p class="text-primary text-24 line-height-1 mb-2">80</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Self Registration vs Recruits</div>
                            <div id="echartBar" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Leads by Province</div>
                            <div id="echartPie" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card card-chart-bottom o-hidden mb-4">
                                <div class="card-body">
                                    <div class="text-muted">Last Month - Recruits</div>
                                    <p class="mb-4 text-primary text-24">40250</p>
                                </div>
                                <div id="echart1" style="height: 260px;"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="card card-chart-bottom o-hidden mb-4">
                                <div class="card-body">
                                    <div class="text-muted">Last Week - Recruits</div>
                                    <p class="mb-4 text-warning text-24">10250</p>
                                </div>
                                <div id="echart2" style="height: 260px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card o-hidden mb-4">
                                <div class="card-header d-flex align-items-center border-0">
                                    <h3 class="w-50 float-left card-title m-0">New Leads</h3>
                                    <div class="dropdown dropleft text-right w-50 float-right">
                                        <button class="btn bg-gray-100" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="nav-icon i-Gear-2"></i>
                                        </button>

                                    </div>
                                </div>

                                <div class="">
                                    <div class="table-responsive">
                                        <table id="user_table" class="table  text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Avatar</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($leads as $lead)

                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>$lead->firstname $lead->lastname</td>
                                                    <td>

                                                        <img class="rounded-circle m-0 avatar-sm-table " src="/assets/images/faces/1.jpg" alt="">

                                                    </td>

                                                    <td>$lead->email</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                        <a href="#" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a href="#" class="text-danger mr-2">
                                                            <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>


                <div class="col-lg-6 col-md-12">

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Top Recruiters</div>
                            <div class="d-flex flex-column flex-sm-row align-items-center mb-3">
                                <img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{asset('assets/images/faces/face01.png')}}" alt="">
                                <div class="flex-grow-1">
                                    <h5 class=""><a href="">Andzie Mabaso</a></h5>

                                    <p class="text-small  m-0">andzie@thrivebs.co.za <br> <span class="text-muted">(200 recruited)</span></p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-rounded btn-sm">View details</button>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-sm-row align-items-center mb-3">
                            <img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{asset('assets/images/faces/face02.png')}}" alt="">
                                <div class="flex-grow-1">
                                    <h5 class=""><a href="">Andrew Sebeko</a></h5>

                                    <p class="text-small  m-0"> andrew.novela55@gmail.com <br> <span class="text-muted">(10 recruited)</span></p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-rounded btn-sm">View details</button>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-sm-row align-items-center mb-3">
                            <img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{asset('assets/images/faces/face03.png')}}" alt="">
                                <div class="flex-grow-1">
                                    <h5 class=""><a href="">Jane van Wyk</a></h5>

                                    <p class="text-small  m-0">jane@yahoo.com <br> <span class="text-muted">(20 recruited)</span></p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-rounded btn-sm">View details</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body p-0">
                            <div class="card-title border-bottom d-flex align-items-center m-0 p-3">
                                <span>User Activity</span>
                                <span class="flex-grow-1"></span>
                                <span class="badge badge-pill badge-warning">23 seconds ago</span>
                            </div>
                            <div class="border-bottom  p-3">
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">AndzieM347 logged in</span>
                                    <h5 class="mb-3"></h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Jane recruited a new lead</span>
                                    <h5 class="mb-3"></h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Kobus sent a message</span>
                                    <h5 class="mb-3"></h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">AndzieM347 sent a message</span>
                                    <h5 class="mb-3"></h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Kobus recruited 2 more leads</span>
                                    <h5 class="mb-3"></h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Tshidiso logged in</span>
                                    <h5 class="mb-3"></h5>
                                </div>
                            </div>



                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body p-0">
                            <h5 class="card-title m-0 p-3">Last 20 Day Leads</h5>
                            <div id="echart3" style="height: 360px;"></div>
                        </div>
                    </div>
                </div>

            </div>


@endsection

@section('page-js')
     <script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/echart.options.js')}}"></script>
     <script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>

@endsection
