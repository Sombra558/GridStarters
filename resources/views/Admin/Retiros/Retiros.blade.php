@extends('layouts.Admin')

@section('content')
<retiros-admin-component :retiros="{{$accountretirosregisters}}" :solds="{{$accountregistersolds}}" blocks="{{$totalblock}}" grids="{{$totalgrid}}"></retiros-admin-component>
@endsection
