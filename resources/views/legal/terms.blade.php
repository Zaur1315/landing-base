@extends('layouts.app')

@section('title', 'Terms & Conditions | ' . config('company.name'))

@section('content')
    <main class="site legal-site">
        <x-site-header/>

        <section class="legal-page">
            <div class="container legal-container">
                <p class="eyebrow">{{ config('company.legal_name') }}</p>
                <h1>Terms & Conditions</h1>

                <p>Last updated: {{ date('F j, Y') }}</p>

                <p>
                    These Terms & Conditions govern your use of the website operated by
                    {{ config('company.legal_name') }}.
                </p>

                <h2>Website Use</h2>
                <p>
                    This website is provided for general informational purposes. By using this website, you agree to use
                    it
                    lawfully and not attempt to interfere with its operation.
                </p>

                <h2>Equipment Information</h2>
                <p>
                    Any equipment descriptions, availability, pricing, or related information provided through this
                    website
                    may change without notice. Website content does not guarantee availability or create a binding
                    offer.
                </p>

                <h2>User Submissions</h2>
                <p>
                    When submitting a form, you agree to provide accurate contact information and understand that we may
                    contact you regarding your request.
                </p>

                <h2>External Links</h2>
                <p>
                    This website may contain links to third-party websites. We are not responsible for the content,
                    availability, or practices of third-party websites.
                </p>

                <h2>Limitation of Liability</h2>
                <p>
                    To the maximum extent permitted by law, {{ config('company.legal_name') }} is not liable for damages
                    arising from your use of this website or reliance on website content.
                </p>

                <h2>Contact</h2>
                <p>
                    Questions about these Terms may be sent to
                    <a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a>.
                </p>

                <p><a href="{{ route('home') }}">Back to Home</a></p>
            </div>
        </section>

        <x-site-footer/>
    </main>
@endsection
