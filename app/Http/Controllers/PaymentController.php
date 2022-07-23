<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use GuzzleHttp\Client;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;

class PaymentController extends Controller
{
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(
            new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret']
            )
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function payWithpaypal(Request $request)
    {
        $montant = $request->get('amount');
        $identifierUniq =  uniqid();
        session()->put('transaction_ref',  $identifierUniq);
        $apiToken = "13725376-6c45-4174-b5bf-d74530a803da";
        $description = "Pour le don de $montant sur OtiDeDemain";
        $YOUR_DOMAIN = url('/');
        $urlStatus = $YOUR_DOMAIN . '/paygate/verify';
        $paygatePortal = "https://paygateglobal.com/v1/page" .
            "?token=$apiToken" .
            "&amount=$montant" .
            "&description=$description" .
            "&identifier=$identifierUniq" . "&url=$urlStatus";

        return redirect($paygatePortal);
    }

    public function getPaymentStatus()
    {
        $ref =  session('transaction_ref');
        $client = new Client();
        $res = $client->request(
            'POST',
            'https://paygateglobal.com/api/v2/status?auth_token=13725376-6c45-4174-b5bf-d74530a803da&identifier=' . $ref
        );
        $response = json_decode($res->getBody(), true);
        $status =   $response['status'];
        echo $status;
        if ($status == 0) {
            \Session::put('success', 'Paiement effectué. Merci pour votre soutien.');
            return Redirect::to('/');
        } else {
            \Session::put('error', 'Echec du paiement.');
            return Redirect::to('/');
        }
    }
}
