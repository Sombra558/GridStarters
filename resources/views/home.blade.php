@extends('layouts.app')

@section('content')
<user-profile-component :user="{{$user}}"></user-profile-component>
@endsection
