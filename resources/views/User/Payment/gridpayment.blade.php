@extends('layouts.app')

@section('content')
<section style="margin-bottom:20px;" class="container">
        <h2 style="margin-left=20px;" class="buy-tite">Select your plan</h2>
            <div class="row">
                <div class="col-md-6">
                    
                    <form action="{{ route('grid-create-grid') }}" method="POST">
                    @csrf
                        <input type="hidden" name="currency" value="usd">
                        <grid-payment-component :planes="{{$planes}}" :user="{{$user}}" gridvalue="{{$gridvalue->value}}"></grid-payment-component>
                        
                       
                     
                       
                    </form>
                </div>
                <div class="col-md-6 padre-pago-descripcion">
                    <img width="100%" src="/img/hora-de-impulsar-tu-negocio.svg" alt="hora-de-impulsar-tu-negocio">
                    <div class="metod-pay">
                        <h3>Payment methods</h3>
                        <img src="/img/PayPal-Logo.png" alt="" srcset="">
                    </div>
                </div>
            </div>
    </section>
@endsection
