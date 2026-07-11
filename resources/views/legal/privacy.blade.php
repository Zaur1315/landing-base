@extends('layouts.app')

@section('title', 'Privacy Policy | ' . config('company.name'))

@section('content')
    <main class="site legal-site">
        <x-site-header />

        <section class="legal-page">
            <div class="container legal-container">
                <p class="eyebrow">{{ config('company.legal_name') }}</p>

                <h1>Privacy Policy</h1>

            <p>Last updated: {{ date('F j, Y') }}</p>

            <p>
                {{ config('company.legal_name') }} respects your privacy. This Privacy Policy explains how we collect,
                use, and protect information submitted through our website.
            </p>

            <h2>Information We Collect</h2>
            <p>
                When you contact us through the website, we may collect your name, email address, phone number,
                message content, IP address, browser information, and other technical information related to your visit.
            </p>

            <h2>How We Use Information</h2>
            <p>
                We use submitted information to respond to inquiries, provide equipment-related information,
                improve our website, and communicate with potential customers.
            </p>

            <h2>Cookies and Tracking</h2>
            <p>
                Our website may use cookies, analytics tools, Meta Pixel, or similar technologies to understand website
                activity and improve advertising performance.
            </p>

            <h2>Information Sharing</h2>
            <p>
                We do not sell personal information. We may share limited information with service providers that help
                us
                operate the website, process communications, or measure advertising performance.
            </p>

            <h2>Contact</h2>
            <p>
                For privacy-related questions, contact us at
                <a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a>.
            </p>

            <p><a href="{{ route('home') }}">Back to Home</a></p>
            </div>
        </section>

        <x-site-footer />
    </main>
@endsection
