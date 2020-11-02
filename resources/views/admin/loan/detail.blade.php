@extends('admin.layout.master')
@section('styles')
    <style>
        .card {
            -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
            border-radius: 4px;
        }

        .box {
            border-radius: 4px;
            padding: 10px;
        }

        .text-white {
            color:white;
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
                    <div class="col-md-3">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase">Loan Detail</span>
                            <h3>Loan : {{ $loan->loanId }}</h3>
                            <h5>User: <b>{{ App\User::find($loan->uid)->username }}</b></h5>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-gold">
                            <div class="box text-center">
                                <h2 class="font-light text-white uppercase">Created Date</h2>
                                <h4 class="text-white">{{$loan->created_at}}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-blue">
                            <div class="box text-center">
                                <h2 class="font-light text-white uppercase">Expire Date</h2>
                                <h4 class="text-white">{{$loan->expire_date}}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-{{$loan->status}}">
                            <div class="box text-center">
                                <h2 class="font-light text-white uppercase">Status</h2>
                                <h4 class="text-white">{{$loan->status}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="portlet box blue-ebonyclay">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-cogs"></i>Loan Detail
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="dashboard-stat purple">
                                            <div class="visual">
                                                <i class="fa fa-money"></i>
                                            </div>
                                            <div class="details">
                                                <div class="number">
                                        <span data-counter="counterup"
                                              data-value="{{number_format($loan->loan_amount, 2, '.', '')}}">{{number_format($loan->loan_amount, 2, '.', '').' $'}}</span>
                                                </div>
                                                <div class="desc">Loan Amount $</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="dashboard-stat blue">
                                            <div class="visual">
                                                <i class="fa fa-money"></i>
                                            </div>
                                            <div class="details">
                                                <div class="number">
                                        <span data-counter="counterup"
                                              data-value="{{number_format($loan->collateral, 6, '.', '')}}">{{number_format($loan->collateral, 6, '.', '')}}</span>
                                                </div>
                                                <div class="desc">Collateral {{$loan->cointype}}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="dashboard-stat green">
                                            <div class="visual">
                                                <i class="fa fa-money"></i>
                                            </div>
                                            <div class="details">
                                                <div class="number">
                                        <span data-counter="counterup"
                                              data-value="{{number_format($loan->coinprice, 2, '.', '')}}">{{number_format($loan->coinprice, 2, '.', '').' $'}}</span>
                                                </div>
                                                <div class="desc">{{$loan->cointype}} Price</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="dashboard-stat yellow">
                                            <div class="visual">
                                                <i class="fa fa-money"></i>
                                            </div>
                                            <div class="details">
                                                <div class="number">
                                        <span data-counter="counterup"
                                              data-value="{{$loan->duration}}">{{$loan->duration}}</span>
                                                </div>
                                                <div class="desc">Month</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-cogs"></i>Repayment History
                                </div>
                            </div>
                            <div class="portlet-body">
                                @if(count(json_decode($loan->repayment)) == 0)
                                    <div class="row text-center">
                                        <h1>There is no repayment history</h1>
                                    </div>
                                @else
                                    @foreach(json_decode($loan->repayment) as $history)
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="card card-green">
                                                <div class="box text-center">
                                                    <h1 class="font-light text-white uppercase">Date</h1>
                                                    <h6 class="text-white">{{$history->date}}</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="card card-blue">
                                                <div class="box text-center">
                                                    <h1 class="font-light text-white uppercase">Principal</h1>
                                                    <h6 class="text-white">{{$history->principal}} {{$loan->cointype}}</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="card card-gold">
                                                <div class="box text-center">
                                                    <h1 class="font-light text-white uppercase">Interest</h1>
                                                    <h6 class="text-white">{{$history->interest}} {{$loan->cointype}}</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="card card-dark">
                                                <div class="box text-center">
                                                    <h1 class="font-light text-white uppercase">Status</h1>
                                                    <h6 class="text-white">{{$history->status}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <hr/>
                                    @endforeach
                                @endif
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