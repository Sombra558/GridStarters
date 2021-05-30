@extends('layouts.app')

@section('content')
<section class="container-fluid">
        <h2 class="buy-tite">Buy Grids</h2>
            <div class="row">
                <div class="col-md-6">
                    
                    <form action="{{ route('grid-create-grid') }}" method="POST">
                    @csrf
                        <input type="hidden" name="value" value="{{$gridvalue->value}}">
                        <input type="hidden" name="currency" value="usd">
                        <grid-payment-component :user="{{$user}}"></grid-payment-component>
                        
                       
                     
                        <input style="margin-top:65px" class="btn btn-cancel" type="submit" value="Buy Grid">
                    </form>
                </div>
                <div class="col-md-6 padre-pago-descripcion">
                    <img width="100%" src="/img/hora-de-impulsar-tu-negocio.png" alt="hora-de-impulsar-tu-negocio">
                    <div class="metod-pay">
                        <h3>Payment methods</h3>
                        <img src="/img/PayPal-Logo.png" alt="" srcset="">
                    </div>
                </div>
            </div>
    </section>
@endsection
