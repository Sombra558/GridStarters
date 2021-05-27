@extends('layouts.Admin')

@section('content')
<retiros-admin-component :solds="{{$accountregistersolds}}" blocks="{{$totalblock}}" grids="{{$totalgrid}}"></retiros-admin-component>
@endsection
