@php
    $addressParts = array_filter([
        config('company.address'),
        config('company.city'),
        config('company.state'),
        config('company.zip'),
    ]);

    $fullAddress = implode(', ', $addressParts);
    $mapQuery = $fullAddress ?: config('company.name');
@endphp

<footer class="rural-footer">
    <div class="container rural-footer-map-wrap">
        <div class="rural-footer-map-copy">
            <p class="eyebrow">Local Equipment Contact</p>
            <h2>Based in {{ config('company.city') }}, {{ config('company.state') }}.</h2>

            @if($fullAddress)
                <p>{{ $fullAddress }}</p>
            @endif
        </div>

        <div class="rural-footer-map">
            <iframe
                title="{{ config('company.name') }} map"
                src="https://www.google.com/maps?q={{ rawurlencode($mapQuery) }}&output=embed"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen>
            </iframe>
        </div>
    </div>

    <div class="container rural-footer-bottom">
        <div class="rural-footer-brand">
            <a href="{{ route('home') }}">
                <img src="/logo.png" alt="{{ config('company.name') }} logo" id="footer-logo">
            </a>
        </div>

        <div class="rural-footer-contact">
            <span>Email</span>
            <a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a>
        </div>

        <nav class="rural-footer-links">
            <a href="{{ route('privacy') }}">Privacy Policy</a>
            <a href="{{ route('terms') }}">Terms & Conditions</a>
        </nav>
    </div>
</footer>
