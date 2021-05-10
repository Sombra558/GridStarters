@extends('layouts.app')

@section('content')
  <payment-component :user="{{$user}}"></payment-component>
@endsection
