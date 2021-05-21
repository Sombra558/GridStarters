@extends('layouts.app')

@section('content')
<my-grids-component :user="{{$user}}"></my-grids-component>
@endsection
