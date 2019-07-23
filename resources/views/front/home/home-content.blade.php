@extends('front.master')

@section('title')
   dealulator
@endsection

@section('content')

    <h2 style="color:green;">Welcome {{Session::get('customerName')}}</h2>

@endsection