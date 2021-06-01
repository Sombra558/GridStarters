@extends('layouts.app')

@section('content')
<user-profile-component :user="{{$user}}" :retirovalue="{{$retirovalue}}"></user-profile-component>
@endsection
