@extends('admin.layout.master')

@section('styles')
    <style>
        .card {
            -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
            border-radius: 4px;
        }

        .card a {
            text-decoration: none;
        }

        .box {
            border-radius: 4px;
            padding: 10px;
        }

        .text-white {
            color: white;
        }

        .card-activated, .card-green {
            background: #26dad2;
            border-color: #26dad2;
        }

        .card-Incompleted, .card-red {
            background: #ef5350;
            border-color: #ef5350;
        }

        .card-activated, .card-dark {
            background: #2f3d4a;
            border-color: #2f3d4a;
        }

        .card-pending, .card-blue {
            background: #1976d2;
            border-color: #1976d2;
        }

        .card-Completed, .card-gold {
            background: goldenrod;
            border-color: goldenrod;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase">Loan Statistics</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <div class="portlet box blue-ebonyclay">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>Loan Statitics
                            </div>
                        </div>
                        <div class="portlet-body">
                            @foreach($cwsetting as $eachSetting)
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card card-red">
                                            <div class="box text-center">
                                                <h2 class="text-white">
                                                    <dt>{{$totalCollateral[$eachSetting->symbol]}}<span
                                                                class="dashboard_box_btc"> {{$eachSetting->symbol}}</span>
                                                    </dt>
                                                </h2>
                                                <h6 class="text-white">Total Collateral</h6>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="card card-gold">
                                            <div class="box text-center">
                                                <h2 class="text-white">
                                                    <dt>{{$totalOwed[$eachSetting->symbol]}}<span
                                                                class="dashboard_box_btc"> {{$eachSetting->symbol}}</span>
                                                    </dt>
                                                </h2>
                                                <h6 class="text-white">Total Owed</h6>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="card card-dark">
                                            <div class="box text-center">
                                                <h2 class="text-white">
                                                    <dt>{{$totalInterest[$eachSetting->symbol]}}<span
                                                                class="dashboard_box_btc"> {{$eachSetting->symbol}}</span>
                                                    </dt>
                                                </h2>
                                                <h6 class="text-white">Total Interest</h6>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="card card-blue">
                                            <div class="box text-center">
                                                <h2 class="text-white">
                                                    <dt>{{$totalPrincipal[$eachSetting->symbol]}}<span
                                                                class="dashboard_box_btc"> {{$eachSetting->symbol}}</span>
                                                    </dt>
                                                </h2>
                                                <h6 class="text-white">Total Principal</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="portlet box blue-ebonyclay">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>Loan Details
                            </div>
                        </div>
                        <div class="portlet-body">

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card card-red">
                                        <a href="{{route('loan.pending')}}">
                                            <div class="box text-center">
                                                <h2 class="text-white">
                                                    <dt>{{$pendingCount}}
                                                    </dt>
                                                </h2>
                                                <h6 class="text-white">Pending</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="card card-green">
                                        <a href="{{route('loan.activated')}}">
                                            <div class="box text-center">

                                                <h2 class="text-white">
                                                    <dt>{{$activatedCount}}
                                                    </dt>
                                                </h2>
                                                <h6 class="text-white">Activated</h6>

                                            </div>
                                        </a>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="card card-gold">
                                        <a href="{{route('loan.completed')}}">
                                            <div class="box text-center">

                                                <h2 class="text-white">
                                                    <dt>{{$completedCount}}
                                                    </dt>
                                                </h2>
                                                <h6 class="text-white">Completed</h6>

                                            </div>
                                        </a>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="card card-dark">
                                        <a href="{{route('loan.incompleted')}}">
                                            <div class="box text-center">

                                                <h2 class="text-white">
                                                    <dt>{{$incompletedCount}}
                                                    </dt>
                                                </h2>
                                                <h6 class="text-white">Incompleted</h6>

                                            </div>
                                        </a>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="card card-blue">
                                        <a href="{{route('loan.failed')}}">
                                            <div class="box text-center">

                                                <h2 class="text-white">
                                                    <dt>{{$failedCount}}
                                                    </dt>
                                                </h2>
                                                <h6 class="text-white">Failed</h6>

                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div><!-- row -->
        </div>
    </div>
    </div>
    </div>
@endsection