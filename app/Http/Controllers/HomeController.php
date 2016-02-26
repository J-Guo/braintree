<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Braintree\Configuration;
use Braintree\ClientToken;
use Braintree\Transaction;
use Braintree;


class HomeController extends Controller
{

    public function __construct()
    {

        //get environment values for braintree
        Configuration::environment('sandbox');
        Configuration::merchantId(config('services.braintree.merchant'));
        Configuration::publicKey(config('services.braintree.public'));
        Configuration::privateKey(config('services.braintree.secret'));


    }

    public function showPayment(){

       //generate token to client side
      $clientToken = ClientToken::generate();
       return view("pay")->with('clientToken',$clientToken);
   }

    public function showPayment2(){
        $clientToken = ClientToken::generate();
        return view("pay2")->with('clientToken',$clientToken);
    }

    public function checkout(Request $request){

        //get user payment nonce
        $nonce = $request->input("payment_method_nonce");

        $result = Transaction::sale([
            'amount' => '1.00',
            'paymentMethodNonce' => $nonce,   //save payment method
            'creditCard'=>[
                'cardholderName' =>'Tony Paul' //save cardholder name
            ],
            'options' => [
                'submitForSettlement' => True
            ]
        ]);

        dd($result);
    }

    public function checkout2(Request $request){

        //get user payment nonce
        $nonce = $request->input("payment_method_nonce");


        $result = Braintree\Customer::create([
            'firstName' => 'Mike',
            'lastName' => 'Jones',
            'email' => 'mike.jones@example.com',
            'phone' => '281.330.8004',
            'creditCard'=>[
                'cardholderName' =>'John Doe'
            ],
            'paymentMethodNonce' => $nonce
        ]);

        dd($result);
    }

    public function showTransactionsList(){

        //get all transactions
        $collection = Transaction::search([]);

        return view('transactions')->with('collection',$collection);
       // dd($collection);

    }

    public function showTransaction($transID){

        $transaction = Braintree\Transaction::find($transID);

        dd($transaction);
    }
}
