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

<footer class="steel-footer">
    <div class="container steel-footer-top">
        <div class="steel-footer-copy">
            <p class="eyebrow">A & E Equipment & Sales</p>
            <h2>Equipment requests handled from New Port Richey, Florida.</h2>
        </div>

        <a href="mailto:{{ config('company.email') }}" class="steel-footer-email">
            {{ config('company.email') }}
        </a>
    </div>

    <div class="container steel-footer-grid">
        <div class="steel-footer-card">
            <a href="{{ route('home') }}" class="steel-footer-logo">
                <img src="/logo.png" alt="{{ config('company.name') }} logo" id="footer-logo">
            </a>

            <p>{{ config('company.legal_name') }}</p>

            @if($fullAddress)
                <p>{{ $fullAddress }}</p>
            @endif
            <div class="steel-footer-links">
                <a href="{{ route('privacy') }}">Privacy Policy</a>
                <a href="{{ route('terms') }}">Terms & Conditions</a>
            </div>

        </div>

        <div class="steel-footer-map">
            <iframe
                title="{{ config('company.name') }} map"
                src="https://www.google.com/maps?q={{ rawurlencode($mapQuery) }}&output=embed"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</footer>
