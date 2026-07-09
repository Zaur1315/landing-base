@php
    $addressParts = array_filter([
        config('company.address'),
        config('company.city'),
        config('company.state'),
        config('company.zip'),
    ]);

    $fullAddress = implode(', ', $addressParts);
@endphp

<footer class="footer">
    <div class="container footer-inner">
        <div class="footer-company">
            <a href="{{ route('home') }}" class="footer-logo-link">
                <img src="/logo.png" alt="{{ config('company.name') }} logo" id="footer-logo">
            </a>

            <p class="footer-legal">{{ config('company.legal_name') }}</p>

            <div class="footer-contact">
                <p>
                    <strong>Email</strong>
                    <a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a>
                </p>

                @if($fullAddress)
                    <p>
                        <strong>Address</strong>
                        {{ $fullAddress }}
                    </p>
                @endif
            </div>
        </div>

        @if($fullAddress)
            <div class="footer-map">
                <iframe
                    src="https://www.google.com/maps?q={{ urlencode($fullAddress) }}&amp;output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen>
                </iframe>
            </div>
        @endif

        <div class="footer-links">
            <strong>Quick Links</strong>
            <a href="{{ route('privacy') }}">Privacy Policy</a>
            <a href="{{ route('terms') }}">Terms & Conditions</a>
            <a href="{{ route('webmail') }}">Webmail</a>
        </div>
    </div>
</footer>
