@php
    $isHome = request()->routeIs('home');

    $homeUrl = $isHome ? '#hero' : route('home');
    $requestTypesUrl = $isHome ? '#request-types' : route('home') . '#request-types';
    $inquiryFlowUrl = $isHome ? '#inquiry-flow' : route('home') . '#inquiry-flow';
    $standardsUrl = $isHome ? '#request-standards' : route('home') . '#request-standards';
    $submitUrl = $isHome ? '#submit-request' : route('home') . '#submit-request';
@endphp

<header class="steel-header">
    <div class="container steel-header-inner">
        <a href="{{ route('home') }}" class="steel-brand">
            <img src="/logo.png" alt="{{ config('company.name') }} logo" id="header-logo">
        </a>

        <nav class="steel-nav">
            <a href="{{ $homeUrl }}">Home</a>
            <a href="{{ $requestTypesUrl }}">Request Types</a>
            <a href="{{ $inquiryFlowUrl }}">Inquiry Flow</a>
            <a href="{{ $standardsUrl }}">Request Standards</a>
        </nav>

        <div class="steel-header-contact">
            <span>{{ config('company.city') }}, {{ config('company.state') }}</span>
            <a href="{{ $submitUrl }}">Start Inquiry</a>
        </div>
    </div>
</header>
