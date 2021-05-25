@extends('layouts.Admin')

@section('content')
<users-admin-component :users="{{$users}}"></users-admin-component>
@endsection
