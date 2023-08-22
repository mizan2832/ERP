@extends('master')
@section('title','Supplier')
@push('css')
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endpush
@push('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('sidebar')
   @include('includes.lib_sidebar')
@endsection

@section('content')
<h1>Supplier</h1>
@endsection

@push('js')

@endpush
