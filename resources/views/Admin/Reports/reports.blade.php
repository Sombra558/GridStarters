@extends('layouts.Admin')

@section('content')
    <reports-admin-component :sales="{{$sales}}"></reports-admin-component>
@endsection
