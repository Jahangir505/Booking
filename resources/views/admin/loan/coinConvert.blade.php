@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase">Loan Coin Convert Detail</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Loan ID</th>
                            <th>User</th>
                            <th>Convert ID</th>
                            <th>Coin</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Status Text</th>
                            <th>Amount Sent</th>
                            <th>Convert Type</th>
                            <th>TxnID</th>
                            <th>Date</th>
                        </tr>
                        @foreach($mos as $mo)
                            <tr>
                                <td style="text-transform: capitalize;">
                                    <a href="{{route('loan.detail', $mo->loanId)}}">{{$mo->loanId}}</a>
                                </td>
                                <td>
                                    <a href="{{route('loan.user', $mo->uid)}}">{{\App\User::find($mo->uid)->username}}</a>
                                </td>
                                <td>{{$mo->convertId}}</td>
                                <td>{{$mo->coin1}}</td>
                                <td>{{number_format($mo->amount,6)}} {{$mo->coin1}}</td>
                                <td>{{$mo->status}}</td>
                                <td>{{$mo->status_text}}</td>
                                <td>{{$mo->amount_sent}} {{$mo->coin2}}</td>
                                <td style="text-transform: capitalize;">{{$mo->convertType}}</td>
                                <td>{{$mo->txnId}}</td>
                                <td>{{$mo->created_at}}</td>
                            </tr>
                        @endforeach
                    </table>
                    <?php echo $mos->render(); ?>
                </div>

            </div><!-- row -->
        </div>
    </div>
    </div>
    </div>
@endsection