@extends('layouts.app')

@section('title', 'NextGenTraderAI: Trading Features, Strategies & Demo')

@section('content')
    @include('components.home.hero')
    @include('components.trading.features')
    @include('components.trading.performance')
    @include('components.trading.strategies')
    @include('components.trading.community')
    @include('components.trading.security')
    @include('components.trading.payment-methods')
    @include('components.trading.pricing')
    {{-- @include('components.trading.training') --}}
    {{-- @include('components.trading.integration') --}}
    @include('components.trading.demo')
    @include('components.trading.faq')
    @include('components.trading.risk-disclosure')
@endsection