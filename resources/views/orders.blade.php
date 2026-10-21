@extends('layouts.dashboard')

@section('title', 'Orders')

@section('content')
    <h1 class="orders-title">Orders Page</h1>
@endsection

@push('styles')
     <link rel="stylesheet" href="{{ asset('css/orders.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/orders.js') }}"></script>
@endpush
