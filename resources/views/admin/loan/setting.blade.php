@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase">Loan Setting</span>
                    </div>

                </div>
                <div class="portlet-body form">
                    <form role="form" method="POST" action="{{route('loan.setting.update')}}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Maximum Life</h4>
                                <input type="text" class="form-control input-lg" value="{{$loanSetting->maxlife}}" name="maxlife" >
                            </div>
                        </div>
                        <div class="row">
                            <hr/>
                            <div class="col-md-4">
                              <h4>Fee Percentage %</h4>
                              <input type="text" class="form-control input-lg" value="{{$loanSetting->feePercent}}" name="feePercent" >
                            </div>
                            <div class="col-md-4">
                                <h4>Loan Percentage %</h4>
                                <input type="text" class="form-control input-lg" value="{{$loanSetting->loanPercent}}" name="loanPercent" >
                            </div>
                            <div class="col-md-4">
                                <h4>Interest Percentage %</h4>
                                <input type="text" class="form-control input-lg" value="{{$loanSetting->interestPercent}}" name="interestPercent" >
                            </div>
                        </div>

                        <div class="row">
                            <hr/>
                            @foreach($affiliateBonusSetting as $eachSetting)
                            <div class="col-md-6">
                                <h4>Affiliate Level {{$eachSetting->level}} Bonus Percentage %</h4>
                                <input type="text" class="form-control input-lg" value="{{$eachSetting->percentage}}" name="affiliateBonusLevel{{$eachSetting->level}}" >
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <hr/>
                            <div class="col-md-6">
                                <h4>Minimum Loan Amount $</h4>
                                <input type="text" class="form-control input-lg"  value="{{$loanSetting->min_loanAmount}}" name="min_loanAmount"  >
                            </div>

                            <div class="col-md-6">
                                <h4>Maximum Loan Amount $</h4>
                                <input type="text" class="form-control input-lg" value="{{$loanSetting->max_loanAmount}}" name="max_loanAmount">
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <hr/>
                            <div class="col-md-6 col-md-offset-3">
                                <button class="btn blue btn-block" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div><!-- row -->
        </div>
    </div>
    </div>
    </div>
@endsection
