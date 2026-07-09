@php
    $isHome = request()->routeIs('home');

    $equipmentUrl = $isHome ? '#inventory-support' : route('home') . '#inventory-support';
    $processUrl = $isHome ? '#process' : route('home') . '#process';
    $contactUrl = $isHome ? '#contact' : route('home') . '#contact';
@endphp

<header class="rural-header">
    <div class="rural-header-strip">
        <div class="container rural-header-strip-inner">
            <span>{{ config('company.city') }}, {{ config('company.state') }}</span>

            <a href="mailto:{{ config('company.email') }}">
                {{ config('company.email') }}
            </a>
        </div>
    </div>

    <div class="container rural-header-main">
        <a href="{{ route('home') }}" class="rural-brand">
            <img src="/logo.png" alt="{{ config('company.name') }} logo" id="header-logo">
        </a>

        <nav class="rural-nav">
            <a href="{{ $equipmentUrl }}">Equipment Support</a>
            <a href="{{ $processUrl }}">How It Works</a>
            <a href="{{ $contactUrl }}">Contact</a>
        </nav>

        <a href="{{ $contactUrl }}" class="rural-header-button">
            Start Request
        </a>
    </div>
</header>
