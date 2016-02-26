@extends("layouts.main")


@section("content")

    <div class="page-header">
        <h1>Braintree Transcations List</h1>
    </div>

<div clas="row">
    <div class="col-sm-10 col-sm-offset-1">
    <table id="transcationTable" class="table table-striped">
        <tr>
            <th>Transaction ID</th>
            <th>Transaction Date</th>
            <th>Type</th>
            <th>Status</th>
            <th>Card Info</th>
            <th>Amount</th>
        </tr>
            @foreach($collection as $transaction)
            <tr>
            <td><a href="transactions/{{$transaction->id}}">{{$transaction->id}}</a></td>
            <td>{{date_format($transaction->createdAt,'Y-m-d H:i:s')}}</td>
            <td>{{$transaction->type}}</td>
            <td>{{$transaction->status}}</td>
            <td>{{'************'.$transaction->creditCard['last4']}}</td>
            <td>{{$transaction->amount}}</td>
            </tr>
            @endforeach
    </table>
    </div>
</div>



@stop


@section('footer')
    <script src="https://js.braintreegateway.com/js/braintree-2.20.0.min.js"></script>
@stop