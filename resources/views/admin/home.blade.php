@extends('admin.layout.master')

@section('content')

    @php
        $tuser = \App\User::where('status','1')->count();
    @endphp
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Dashboard</span>
            </li>
        </ul>

    </div>

    <h3 class="page-title"> Dashboard
        <small>dashboard & statistics</small>
    </h3>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12">

            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-users"></i> USERS STATISTICS
                    </div>
                </div>
                <div class="portlet-body text-center">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="dashboard-stat blue">
                                <div class="visual">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{{$tuser}}">{{$tuser}}</span>
                                    </div>
                                    <div class="desc"> Total User</div>
                                </div>
                                <a class="more" href="{{route('users')}}"> View more
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat dashboard-stat-v2 blue">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="1349">1349</span>
                    </div>
                    <div class="desc"> New Feedbacks </div>
                </div>
                <a class="more" href="{{route('users')}}"> View more
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="12,5">12,5</span>M$ </div>
                    <div class="desc"> Total Profit </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="549">549</span>
                    </div>
                    <div class="desc"> New Orders </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                <div class="visual">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="details">
                    <div class="number"> +
                        <span data-counter="counterup" data-value="89">89</span>% </div>
                    <div class="desc"> Brand Popularity </div>
                </div>
            </a>
        </div>
    </div>


    {{-- Chart --}}
    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-cursor font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">General Stats</span>
                    </div>
                    <div class="actions">
                        <a href="javascript:;" class="btn btn-sm btn-circle red easy-pie-chart-reload">
                            <i class="fa fa-repeat"></i> Reload </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="easy-pie-chart">
                                <div class="number transactions" data-percent="55">
                                    <span>+55</span>% <canvas height="75" width="75"></canvas></div>
                                <a class="title" href="javascript:;"> Transactions
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"> </div>
                        <div class="col-md-4">
                            <div class="easy-pie-chart">
                                <div class="number visits" data-percent="85">
                                    <span>+85</span>% <canvas height="75" width="75"></canvas></div>
                                <a class="title" href="javascript:;"> New Visits
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"> </div>
                        <div class="col-md-4">
                            <div class="easy-pie-chart">
                                <div class="number bounce" data-percent="46">
                                    <span>-46</span>% <canvas height="75" width="75"></canvas></div>
                                <a class="title" href="javascript:;"> Bounce
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Server Stats</span>
                        <span class="caption-helper">monthly stats...</span>
                    </div>
                    <div class="tools">
                        <a href="" class="collapse" data-original-title="" title=""> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                        <a href="" class="reload" data-original-title="" title=""> </a>
                        <a href="" class="remove" data-original-title="" title=""> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="sparkline-chart">
                                <div class="number" id="sparkline_bar5"><canvas width="113" height="55" style="display: inline-block; width: 113px; height: 55px; vertical-align: top;"></canvas></div>
                                <a class="title" href="javascript:;"> Network
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"> </div>
                        <div class="col-md-4">
                            <div class="sparkline-chart">
                                <div class="number" id="sparkline_bar6"><canvas width="107" height="55" style="display: inline-block; width: 107px; height: 55px; vertical-align: top;"></canvas></div>
                                <a class="title" href="javascript:;"> CPU Load
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"> </div>
                        <div class="col-md-4">
                            <div class="sparkline-chart">
                                <div class="number" id="sparkline_line"><canvas width="100" height="55" style="display: inline-block; width: 100px; height: 55px; vertical-align: top;"></canvas></div>
                                <a class="title" href="javascript:;"> Load Rate
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Chart  --}}
    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bar-chart font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Site Visits</span>
                        <span class="caption-helper">weekly stats...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn red btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">New</label>
                            <label class="btn red btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Returning</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="site_statistics_loading" style="display: none;">
                        <img src="../assets/global/img/loading.gif" alt="loading"> </div>
                    <div id="site_statistics_content" class="display-none" style="display: block;">
                        <div id="site_statistics" class="chart" style="padding: 0px; position: relative;"> <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 480px; height: 300px;" width="480" height="300"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 53px; top: 285px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 10px; text-align: center;">02/2013</div><div style="position: absolute; max-width: 53px; top: 285px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 64px; text-align: center;">03/2013</div><div style="position: absolute; max-width: 53px; top: 285px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 117px; text-align: center;">04/2013</div><div style="position: absolute; max-width: 53px; top: 285px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 171px; text-align: center;">05/2013</div><div style="position: absolute; max-width: 53px; top: 285px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 224px; text-align: center;">06/2013</div><div style="position: absolute; max-width: 53px; top: 285px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 278px; text-align: center;">07/2013</div><div style="position: absolute; max-width: 53px; top: 285px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 331px; text-align: center;">08/2013</div><div style="position: absolute; max-width: 53px; top: 285px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 385px; text-align: center;">09/2013</div><div style="position: absolute; max-width: 53px; top: 285px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 438px; text-align: center;">10/2013</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 273px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 20px; text-align: right;">0</div><div style="position: absolute; top: 220px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">1000</div><div style="position: absolute; top: 166px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">2000</div><div style="position: absolute; top: 113px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">3000</div><div style="position: absolute; top: 59px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">4000</div><div style="position: absolute; top: 6px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">5000</div></div></div><canvas class="flot-overlay" width="480" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 480px; height: 300px;"></canvas></div>
                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-red-sunglo hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Revenue</span>
                        <span class="caption-helper">monthly stats...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a href="" class="btn dark btn-outline btn-circle btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter Range
                                <span class="fa fa-angle-down"> </span>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;"> Q1 2014
                                        <span class="label label-sm label-default"> past </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Q2 2014
                                        <span class="label label-sm label-default"> past </span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:;"> Q3 2014
                                        <span class="label label-sm label-success"> current </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Q4 2014
                                        <span class="label label-sm label-warning"> upcoming </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="site_activities_loading" style="display: none;">
                        <img src="../assets/global/img/loading.gif" alt="loading"> </div>
                    <div id="site_activities_content" class="display-none" style="display: block;">
                        <div id="site_activities" style="height: 228px; padding: 0px; position: relative;"> <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 480px; height: 228px;" width="480" height="228"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 48px; top: 209px; font: small-caps 400 11px / 18px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 21px; text-align: center;">DEC</div><div style="position: absolute; max-width: 48px; top: 209px; font: small-caps 400 11px / 18px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 71px; text-align: center;">JAN</div><div style="position: absolute; max-width: 48px; top: 209px; font: small-caps 400 11px / 18px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 119px; text-align: center;">FEB</div><div style="position: absolute; max-width: 48px; top: 209px; font: small-caps 400 11px / 18px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 165px; text-align: center;">MAR</div><div style="position: absolute; max-width: 48px; top: 209px; font: small-caps 400 11px / 18px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 215px; text-align: center;">APR</div><div style="position: absolute; max-width: 48px; top: 209px; font: small-caps 400 11px / 18px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 262px; text-align: center;">MAY</div><div style="position: absolute; max-width: 48px; top: 209px; font: small-caps 400 11px / 18px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 313px; text-align: center;">JUN</div><div style="position: absolute; max-width: 48px; top: 209px; font: small-caps 400 11px / 18px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 362px; text-align: center;">JUL</div><div style="position: absolute; max-width: 48px; top: 209px; font: small-caps 400 11px / 18px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 408px; text-align: center;">AUG</div><div style="position: absolute; max-width: 48px; top: 209px; font: small-caps 400 11px / 18px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 459px; text-align: center;">SEP</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 197px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 20px; text-align: right;">0</div><div style="position: absolute; top: 149px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 7px; text-align: right;">500</div><div style="position: absolute; top: 100px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">1000</div><div style="position: absolute; top: 52px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">1500</div><div style="position: absolute; top: 3px; font: small-caps 400 11px / 14px &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">2000</div></div></div><canvas class="flot-overlay" width="480" height="228" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 480px; height: 228px;"></canvas></div>
                    </div>
                    <div style="margin: 20px 0 10px 30px">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-sm label-success"> Revenue: </span>
                                <h3>$13,234</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-sm label-info"> Tax: </span>
                                <h3>$134,900</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-sm label-danger"> Shipment: </span>
                                <h3>$1,134</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-sm label-warning"> Orders: </span>
                                <h3>235090</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>


    
    

    <div class="clearfix"></div>

@endsection
