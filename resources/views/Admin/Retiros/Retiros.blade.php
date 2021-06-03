@extends('layouts.Admin')

@section('content')
<retiros-admin-component :retirovalue="{{$retirovalue}}" :blockvalue="{{$blockvalue}}" :gridvalue="{{$gridvalue}}" :retiros="{{$accountretirosregisters}}" :solds="{{$accountregistersolds}}" blocks="{{$totalblock}}" grids="{{$totalgrid}}"></retiros-admin-component>
@endsection
