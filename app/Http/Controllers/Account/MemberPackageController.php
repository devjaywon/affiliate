<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Account\PaymentController;

use Illuminate\Support\Facades\Config;

class MemberPackageController extends PaymentController
{

    //uses constructor dependency injection

   public $PaymentControler;

    public function __construct()
    {
        $user = User::find(Auth::id());
      /*  if($user->hasType())
        {
            redirect('/home');
         } */
    }


    public  function index()
    {
        $plan = request()->query('plan');
        $amount = "5500";
       $plan = $plan == "affiliate" ? "affiliate payment" : "creator payment";
        $gateways = Config::get('paymentgateways');

        return view('pay.pay', ['amount' => $amount, 'plan' => $plan, "gateways"=> $gateways]);


    }

    public function verify($gateway)
    {
        
        $paymentRepository = $this->getPaymentRepository($gateway);

        $response = $paymentRepository->verify($gateway);

        if($response['status']){

            $this->transactionRepository->create([
                "gateway" => $gateway,
                "user_id" =>auth()->user()->id,
                "reference" => $response['ref'],
                "amount" => $response['data']->amount
            ]);

            return redirect()->route('success', $response['ref'])->with("msg", $response['message']);
            
        }else{
            return redirect()->route('cancel', $response['ref'])->with("msg", $response['message']);
        }
    }


    

}