@extends('layouts.app')

@section('content')
<section class="container-fluid">
        <h2 class="buy-tite">Buy Blocks</h2>
            <div class="row">
                <div class="col-md-6">
                   <form action="{{ route('grid-create-2') }}" method="POST" enctype="multipart/form-data">
                   @csrf
                    <input type="hidden" name="value" value="{{$gridvalue->value}}">
                    <input type="hidden" name="currency" value="usd">
                    <payment-component :user="{{$user}}"></payment-component>
                  
                    
                    </form>
                </div>
                <div class="col-md-6 padre-pago-descripcion">
                    <a href="/grid-confirm-payment"><img  width="100%" src="/img/hora-de-impulsar-tu-negocio.svg" alt="hora-de-impulsar-tu-negocio"></a>
                    <div class="metod-pay">
                        <h3>Payment methods</h3>
                        <img src="/img/PayPal-Logo.png" alt="" srcset="">
                    </div>
                </div>
            </div>
    </section>
@endsection
