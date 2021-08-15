@extends('layouts.Admin')

@section('content')
<home-admin-component :gridsales="{{$gridsales}}" :sales="{{$sales}}" blocks="{{$totalblock}}" grids="{{$totalgrid}}"></home-admin-component>
@endsection
