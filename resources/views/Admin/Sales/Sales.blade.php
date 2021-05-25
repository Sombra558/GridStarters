@extends('layouts.Admin')

@section('content')
    <sales-admin-component :sales="{{$sales}}"></sales-admin-component>
@endsection
