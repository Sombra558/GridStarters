@extends('layouts.app')

@section('content')
  <grid-payment-component :user="{{$user}}"></grid-payment-component>
@endsection
