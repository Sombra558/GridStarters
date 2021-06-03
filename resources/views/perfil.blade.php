@extends('layouts.app')

@section('content')
<my-perfil-component :user="{{$user}}"></my-perfil-component>
@endsection