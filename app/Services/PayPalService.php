<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Helpers\General\CollectionHelper;
use Illuminate\Support\Facades\Auth;
use App\PurchasesHistory;
use App\Grip;
use App\Bloque;
use App\UserBank;
use App\ImagesSystem;
use App\AccountRegisters;
use App\Services\PayPalService;
use App\ConfiguracionPublica;
use App\Traits\ConsumesExternalServices;
use File;

class PayPalService
{
    use ConsumesExternalServices;

    protected $baseUri;

    protected $clientId;

    protected $clientSecret;

    protected $plans;

    public function __construct()
    {
        $this->baseUri = config('services.paypal.base_uri');
        $this->clientId = config('services.paypal.client_id');
        $this->clientSecret = config('services.paypal.client_secret');
        $this->plans = config('services.paypal.plans');
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $headers['Authorization'] = $this->resolveAccessToken();
    }

    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function resolveAccessToken()
    {
        $credentials = base64_encode("{$this->clientId}:{$this->clientSecret}");

        return "Basic {$credentials}";
    }

    public function handlePayment(Request $request)
    {
        $order = $this->createOrder($request->value, $request->currency);
    
        $orderLinks = collect($order->links);

        $approve = $orderLinks->where('rel', 'approve')->first();

        session()->put('approvalId', $order->id);
        session()->put('matriz', $request->matriz);
        session()->put('filas', $request->filas);
        session()->put('columns', $request->columns);
      
        return redirect($approve->href);
    }
    public function handlePaymentBlocks(Request $request)
    {
        $ordervalue=$request->column*$request->fila;
        $order = $this->createOrder2($ordervalue*$request->value, $request->currency);
        $orderLinks = collect($order->links);
        $approve = $orderLinks->where('rel', 'approve')->first();
        $cart = json_decode($request['cart']);
        $blockvalue=ConfiguracionPublica::where('nombre','block')->first();
        $taxvalue=ConfiguracionPublica::where('nombre','tax')->first();
        $matriz=Grip::find($request['matriz_id']);
        
        $aumentox=600/$request['column'];
        $aumentoy=600/$request['fila'];
        $imageorigin = $request->file('img');
        $pathorigin =$imageorigin->store('public/Grids');
        $pathorigin = str_replace('public/', '', $pathorigin);
    
        $characters2 = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ*-%$&';
        $characters2Length = strlen($characters2);
        $randomString2 = '';
            for ($i = 0; $i < 15; $i++) {
                $randomString2 .= $characters2[rand(0, $characters2Length - 1)];
        }
        foreach ($cart as $bloque) {
            $newbloque = Bloque::create([
                'column' => $bloque->columna,
                'fila' =>   $bloque->fila,
                'size' =>  $request['size'],
                'url' =>  $request['url'],
                'codigo' => $randomString2,
                'img' => $pathorigin,
                'estado' => true,
                'matriz_id' => $matriz->id,
                'user_id' => Auth::user()->id,
            ]);   
         }
         $myblocks = Bloque::where('codigo',$randomString2)->get();
         $myImg = collect();
         if ($request->file('img')) {
            $origemx=0;
            $origemy=0;
            for ($i=0; $i < (int)$request['fila']; $i++) {
                $origemx=0;
                for ($j=0; $j < (int)$request['column']; $j++) { 
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $charactersLength = strlen($characters);
                    $randomString = '';
                        for ($k = 0; $k < 15; $k++) {
                            $randomString .= $characters[rand(0, $charactersLength - 1)];
                    }
                    $img = \Image::make($request->file('img'));
                    $img->resize(600,600);
                    $temp=null;
                    $temp = $img->crop(round(600/$request['column']),round(600/$request['fila']),round($origemx),round($origemy));
                    $temp->resize(25,25);
                    $path = public_path().'/storage-public/Gridsmin/';
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $temp->save($path.$randomString.str_replace(' ','_',$request->file('img')->getClientOriginalName()));
                    $myImg->push([
                        'path' => 'Gridsmin/'.$randomString.str_replace(' ','_',$request->file('img')->getClientOriginalName()),
                    ]);
                    $origemx=$origemx+$aumentox;
                }
                $origemy=$origemy+$aumentoy;

            }


        }

        session()->put('approvalId', $order->id);
        session()->put('myblocks', $myblocks);
        session()->put('myImg', $myImg);
        session()->put('matriz', $matriz);
        session()->put('column', $request['column']);
        session()->put('fila', $request['fila']);
     
        
      
      
        return redirect($approve->href);
    }

    public function handleApproval()
    {
        
        if (session()->has('approvalId')) {
            $approvalId = session()->get('approvalId');
            $payment = $this->capturePayment($approvalId);
          
            $name = $payment->payer->name->given_name;
            $transactionId=$payment->purchase_units[0]->payments->captures[0]->id;
            $payment = $payment->purchase_units[0]->payments->captures[0]->amount;
            
            $amount = $payment->value;
            $currency = $payment->currency_code;
            
            $username=Auth::user()->name;
            $username=str_replace(' ','-',$username);
            $gridvalue=ConfiguracionPublica::where('nombre','grid')->first();
            do {
                $pase=false;
                $random=rand(1, 1500);
                $nombreURL='grid-'.$username.$random;
                $verifi=Grip::where('nombreURL',$nombreURL)->first();
                if ($verifi) {
                    $pase=true;
                }
                # code...
            } while ($pase != false);

            $evento= Grip::create([
                'user_id' =>Auth::user()->id,
                'matriz' => session()->get('matriz'),
                'filas' => session()->get('filas'),
                'columns' => session()->get('columns'),
                'nombreURL' =>  $nombreURL,
            ]); 
            $evento->nombreURL=strtolower($nombreURL);
            $evento->save();
            PurchasesHistory::create([
                'user_id' =>Auth::user()->id,
                'amount' => $amount,
                'descripcion' =>  'Grid purchase',
                'transaction_id' => $transactionId,
                'payment_method' =>  'Paypal',
            ]); 
    
            return redirect()
                ->route('mygrid')
                ->withSuccess(['payment' => "Thanks, {$name}. We received your {$amount}{$currency} payment."]);
        }

        return redirect()
            ->route('mygrid')
            ->withErrors('We cannot capture your payment. Try again, please');
    }
    public function handleApprovalBlock()
    {
        
        if (session()->has('approvalId')) {
            $approvalId = session()->get('approvalId');
            $payment = $this->capturePayment($approvalId);

            $name = $payment->payer->name->given_name;
            $transactionId=$payment->purchase_units[0]->payments->captures[0]->id;
            $payment = $payment->purchase_units[0]->payments->captures[0]->amount;
           
           
            $amount = $payment->value;
            $currency = $payment->currency_code;
            $myblocks=session()->get('myblocks');
            $myImg=session()->get('myImg');
            $matriz=session()->get('matriz');
            $blockvalue=ConfiguracionPublica::where('nombre','block')->first();
            $taxvalue=ConfiguracionPublica::where('nombre','tax')->first();
            $impuestoo=$taxvalue->value/100;
            for ($a=0; $a < $myblocks->count(); $a++) { 

                    $myblocks[$a]->fragmento = $myImg[$a]["path"];
                    $myblocks[$a]->estado = false;
                    $myblocks[$a]->save();
                    $mytemp = json_decode($matriz->matriz);
                    $mytemp[$myblocks[$a]->fila][$myblocks[$a]->column]->src=$myImg[$a]["path"];
                    $mytemp[$myblocks[$a]->fila][$myblocks[$a]->column]->original=$myblocks[$a]->img;
                    $mytemp[$myblocks[$a]->fila][$myblocks[$a]->column]->url=$myblocks[$a]->url;
                    $mytemp = json_encode($mytemp);
                    $matriz->matriz = $mytemp;
                    $matriz->save();
            }
            $userbank=UserBank::where('user_id',$matriz->user_id)->first();
            $positivo= session()->get('column')*session()->get('fila');
            $transactioncompleta=$positivo*$blockvalue->value;
            $tax=$transactioncompleta*$impuestoo;
            if ($userbank) {
                $userbank->available=$userbank->available + $transactioncompleta-$tax;
                $userbank->save();
                AccountRegisters::create([
                    'user_banks_id' =>$userbank->id,
                    'amount' => $transactioncompleta-$tax,
                    'tax' => $tax,
                    'type' => "sold",
                    'transaction_id' => $transactionId,
                    'payment_method' =>  'Paypal',
                    'withdrawn' =>   0,
                ]);   
            }else{
                $new=UserBank::create([
                    'user_id' =>$matriz->user_id,
                    'available' => $transactioncompleta-$tax,
                    
                    'withdrawn' =>   0,
                ]);
                AccountRegisters::create([
                    'user_banks_id' =>$new->id,
                    'amount' => $transactioncompleta-$tax,
                    'tax' => $tax,
                    'type' => "sold",
                    'transaction_id' => $transactionId,
                    'payment_method' =>  'Paypal',
                    'withdrawn' =>   0,
                ]); 
                
            }
            PurchasesHistory::create([
                'user_id' =>Auth::user()->id,
                'amount' => $positivo*$blockvalue->value,
                'descripcion' =>  'Block purchase',
                'transaction_id' => $transactionId,
                'payment_method' =>  'Paypal',
            ]); 
            
            $ruta="/grid/".$matriz->nombreURL;
            return redirect($ruta);
        }

        return redirect()
            ->route('home')
            ->withErrors('We cannot capture your payment. Try again, please');
    }
    public function handleSubscription(Request $request)
    {
        $subscription = $this->createSubscription(
            $request->plan,
            $request->user()->name,
            $request->user()->email
        );

        $subscriptionLinks = collect($subscription->links);

        $approve = $subscriptionLinks->where('rel', 'approve')->first();

        session()->put('subscriptionId', $subscription->id);

        return redirect($approve->href);
    }

    public function validateSubscription(Request $request)
    {
        if (session()->has('subscriptionId')) {
            $subscriptionId = session()->get('subscriptionId');

            session()->forget('subscriptionId');

            return $request->subscription_id == $subscriptionId;
        }

        return false;
    }

    public function createOrder($value, $currency)
    {
        return $this->makeRequest(
            'POST',
            '/v2/checkout/orders',
            [],
            [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    0 => [
                        'amount' => [
                            'currency_code' => strtoupper($currency),
                            'value' => round($value * $factor = $this->resolveFactor($currency)) / $factor,
                        ]
                    ]
                ],
                'application_context' => [
                    'brand_name' => config('app.name'),
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'PAY_NOW',
                    'return_url' => route('approval'),
                    'cancel_url' => route('cancelled'),
                ]
            ],
            [],
            $isJsonRequest = true,
        );
    }
    public function createOrder2($value, $currency)
    {
        return $this->makeRequest(
            'POST',
            '/v2/checkout/orders',
            [],
            [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    0 => [
                        'amount' => [
                            'currency_code' => strtoupper($currency),
                            'value' => round($value * $factor = $this->resolveFactor($currency)) / $factor,
                        ]
                    ]
                ],
                'application_context' => [
                    'brand_name' => config('app.name'),
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'PAY_NOW',
                    'return_url' => route('approval2'),
                    'cancel_url' => route('cancelled'),
                ]
            ],
            [],
            $isJsonRequest = true,
        );
    }

    public function capturePayment($approvalId)
    {
        return $this->makeRequest(
            'POST',
            "/v2/checkout/orders/{$approvalId}/capture",
            [],
            [],
            [
                'Content-Type' => 'application/json',
            ],
        );
    }

    public function createSubscription($planSlug, $name, $email)
    {
        return $this->makeRequest(
            'POST',
            '/v1/billing/subscriptions',
            [],
            [
                'plan_id' => $this->plans[$planSlug],
                'subscriber' => [
                    'name' => [
                        'given_name' => $name,
                    ],
                    'email_address' => $email,
                ],
                'application_context' => [
                    'brand_name' => config('app.name'),
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'SUBSCRIBE_NOW',
                    'return_url' => route('subscribe.approval', ['plan' => $planSlug]),
                    'cancel_url' => route('subscribe.cancelled'),
                ]
            ],
            [],
            $isJsonRequest = true,
        );
    }

    public function resolveFactor($currency)
    {
        $zeroDecimalCurrencies = ['JPY'];

        if (in_array(strtoupper($currency), $zeroDecimalCurrencies)) {
            return 1;
        }

        return 100;
    }
}