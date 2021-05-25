@extends('layouts.Admin')

@section('content')
<public-admin-component :matrices="{{$grids}}"></public-admin-component>
@endsection
