@extends("layouts.main")


@section("content")
    <div class="page-header">
        <h1>Payment checkout with Braintree Drop-in</h1>
    </div>

<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
    <form id="checkout" action="checkout" method="post">
        <input type="hidden" id="clientToken" value="{{$clientToken}}">
        <div id="payment-form"></div>
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Pay">
    </form>
    </div>
</div>


@stop


@section('footer')
    <script src="https://js.braintreegateway.com/js/braintree-2.20.0.min.js"></script>
    <script>
        // We generated a client token for you so you can test out this code
        // immediately. In a production-ready integration, you will need to
        // generate a client token on your server (see section below).
        //    var clientToken = "eyJ2ZXJzaW9uIjoyLCJhdXRob3JpemF0aW9uRmluZ2VycHJpbnQiOiI4MjcyNGU1OTBkZmRjZGVkOWM2NzRlZTNiMGRkZDk2YWEwYWEwNThmZTFmYWQzN2YzZGJhZGE2NDhkOWMxM2Y0fGNyZWF0ZWRfYXQ9MjAxNi0wMi0yNVQwMDo1NTo0MS45MDkyNTA1NjErMDAwMFx1MDAyNm1lcmNoYW50X2lkPWN2aDRzbWpkODJkeWYzaHdcdTAwMjZwdWJsaWNfa2V5PTJtajVwbmtrOHk4d2J0YnciLCJjb25maWdVcmwiOiJodHRwczovL2FwaS5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tOjQ0My9tZXJjaGFudHMvY3ZoNHNtamQ4MmR5ZjNody9jbGllbnRfYXBpL3YxL2NvbmZpZ3VyYXRpb24iLCJjaGFsbGVuZ2VzIjpbImN2diIsInBvc3RhbF9jb2RlIl0sImVudmlyb25tZW50Ijoic2FuZGJveCIsImNsaWVudEFwaVVybCI6Imh0dHBzOi8vYXBpLnNhbmRib3guYnJhaW50cmVlZ2F0ZXdheS5jb206NDQzL21lcmNoYW50cy9jdmg0c21qZDgyZHlmM2h3L2NsaWVudF9hcGkiLCJhc3NldHNVcmwiOiJodHRwczovL2Fzc2V0cy5icmFpbnRyZWVnYXRld2F5LmNvbSIsImF1dGhVcmwiOiJodHRwczovL2F1dGgudmVubW8uc2FuZGJveC5icmFpbnRyZWVnYXRld2F5LmNvbSIsImFuYWx5dGljcyI6eyJ1cmwiOiJodHRwczovL2NsaWVudC1hbmFseXRpY3Muc2FuZGJveC5icmFpbnRyZWVnYXRld2F5LmNvbSJ9LCJ0aHJlZURTZWN1cmVFbmFibGVkIjpmYWxzZSwicGF5cGFsRW5hYmxlZCI6dHJ1ZSwicGF5cGFsIjp7ImRpc3BsYXlOYW1lIjoiT3JiZWxsYSIsImNsaWVudElkIjpudWxsLCJwcml2YWN5VXJsIjoiaHR0cDovL2V4YW1wbGUuY29tL3BwIiwidXNlckFncmVlbWVudFVybCI6Imh0dHA6Ly9leGFtcGxlLmNvbS90b3MiLCJiYXNlVXJsIjoiaHR0cHM6Ly9hc3NldHMuYnJhaW50cmVlZ2F0ZXdheS5jb20iLCJhc3NldHNVcmwiOiJodHRwczovL2NoZWNrb3V0LnBheXBhbC5jb20iLCJkaXJlY3RCYXNlVXJsIjpudWxsLCJhbGxvd0h0dHAiOnRydWUsImVudmlyb25tZW50Tm9OZXR3b3JrIjp0cnVlLCJlbnZpcm9ubWVudCI6Im9mZmxpbmUiLCJ1bnZldHRlZE1lcmNoYW50IjpmYWxzZSwiYnJhaW50cmVlQ2xpZW50SWQiOiJtYXN0ZXJjbGllbnQzIiwiYmlsbGluZ0FncmVlbWVudHNFbmFibGVkIjp0cnVlLCJtZXJjaGFudEFjY291bnRJZCI6Im9yYmVsbGEiLCJjdXJyZW5jeUlzb0NvZGUiOiJBVUQifSwiY29pbmJhc2VFbmFibGVkIjpmYWxzZSwibWVyY2hhbnRJZCI6ImN2aDRzbWpkODJkeWYzaHciLCJ2ZW5tbyI6Im9mZiJ9";

        var clientToken = $("#clientToken").val(); //get client token


        braintree.setup(clientToken, "dropin", {
            container: "payment-form"
        });



    </script>
@stop