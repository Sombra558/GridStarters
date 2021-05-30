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
                    <div class="flexi-btn-form">
                            <input style="margin-top:65px" class="btn btn-grip" type="submit" value="Save & pay">
                            <input style="margin-top:65px" class="btn btn-cancel" type="button" value="Cancel">
                        </div>
                    
                    </form>
                </div>
                <div class="col-md-6 padre-pago-descripcion">
                    <a href="/grid-confirm-payment"><img  width="100%" src="/img/hora-de-impulsar-tu-negocio.png" alt="hora-de-impulsar-tu-negocio"></a>
                    <div class="metod-pay">
                        <h3>Payment methods</h3>
                        <img src="/img/PayPal-Logo.png" alt="" srcset="">
                    </div>
                </div>
            </div>
    </section>
@endsection
