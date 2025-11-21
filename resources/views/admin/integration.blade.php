@extends('admin.layouts.index')
@section('content')
    @foreach ($proreg_products as $proreg)
        {{ $proreg->proreg_id }}        
    @endforeach
@endsection
