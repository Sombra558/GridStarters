@extends('layouts.public')

@section('content')
<top-component :users="{{$users}}"></top-component>
@endsection

