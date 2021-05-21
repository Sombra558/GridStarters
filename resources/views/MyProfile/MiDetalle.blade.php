@extends('layouts.app')

@section('content')
<my-grids-detalle-component :user="{{$user}}" :grip="{{$grip}}"></my-grids-detalle-component>
@endsection
