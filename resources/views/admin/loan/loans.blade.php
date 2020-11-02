@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase">Loans</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Loan ID</th>
                            <th>User</th>
                            <th>Amount</th>
                            <th>Coin Price</th>
                            <th>Collateral</th>
                            <th>Duration</th>
                            <th>Status</th>
                            <th>Expire Date</th>
                            <th>Detail</th>
                        </tr>
                        @foreach($loans as $log)
                            <tr>
                                <td style="text-transform: capitalize;">
                                    {{$log->loanId}}
                                </td>
                                <td>
                                    <a href="{{route('loan.user', $log->uid)}}">{{\App\User::find($log->uid)->username}}</a>
                                </td>
                                <td>{{$log->loan_amount}} USD</td>
                                <td>{{number_format($log->coinprice,2)}} USD</td>
                                <td>{{number_format($log->collateral,6)}} {{$log->cointype}}</td>
                                <td>{{$log->duration}} Months</td>
                                <td style="text-transform: capitalize;">{{$log->status}}</td>
                                <td>{{$log->expire_date}}</td>
                                <td>
                                    <a href="{{route('loan.detail', $log->loanId)}}" class="btn btn-outline btn-circle btn-sm green">
                                        <i class="fa fa-eye"></i> View </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <?php echo $loans->render(); ?>
                </div>

            </div><!-- row -->
        </div>
    </div>
    </div>
    </div>
@endsection