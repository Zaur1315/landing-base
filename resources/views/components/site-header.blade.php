@php
    $isHome = request()->routeIs('home');

    $equipmentUrl = $isHome ? '#inventory-support' : route('home') . '#inventory-support';
    $processUrl = $isHome ? '#process' : route('home') . '#process';
    $contactUrl = $isHome ? '#contact' : route('home') . '#contact';
@endphp

<header class="topbar">
    <div class="container topbar-inner">
        <a href="{{ route('home') }}" class="brand">
            <img src="/logo.png" alt="{{ config('company.name') }} logo" id="header-logo">
        </a>

        <nav class="nav">
            <a href="{{ $equipmentUrl }}">Equipment</a>
            <a href="{{ $processUrl }}">Process</a>
            <a href="{{ $contactUrl }}">Contact</a>
        </nav>

        <a href="{{ $contactUrl }}" class="header-cta">Request Info</a>
    </div>
</header>
