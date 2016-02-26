@extends("layouts.main")


@section("content")
    <div class="page-header">
        <h1>Payment checkout with Braintree Drop-in and Customized Field</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form id="checkout" method="post" action="checkout2">
                <input type="hidden" id="clientToken" value="{{$clientToken}}">

                <div class="form-group">
                    <input type="text" class="form-control" data-braintree-name="cardholderName" id="cardholderName" placeholder="Name On Card">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="cardholderMobile" id="cardholderMobile" placeholder="Mobile Number">
                </div>

                <!-- Braintree iframe -->
                <div id="braintree"></div>
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Pay $99">
            </form>
        </div>
    </div>


@stop


@section('footer')
    <script src="https://js.braintreegateway.com/js/braintree-2.20.0.min.js"></script>
    <script>

        var clientToken = $("#clientToken").val(); //get client token

        braintree.setup(clientToken, "dropin", {
          container:"braintree"
        });


    </script>
@stop