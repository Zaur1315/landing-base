@extends('layouts.app')

@section('content')
    <main class="site">
        <header class="header">
            <div class="container header-inner">
                <a href="{{ route('home') }}" class="brand">{{ config('company.name') }}</a>

                <nav class="nav">
                    <a href="#about">About</a>
                    <a href="#equipment">Equipment</a>
                    <a href="#contact">Contact</a>
                </nav>
            </div>
        </header>

        <section class="hero">
            <div class="container hero-grid">
                <div>
                    <p class="eyebrow">Heavy Equipment Sales</p>
                    <h1>Reliable equipment support for local buyers and businesses.</h1>
                    <p class="hero-text">
                        {{ config('company.name') }} helps customers find practical heavy, construction,
                        utility, and commercial equipment without unnecessary complications.
                    </p>
                    <div class="hero-actions">
                        <a href="#contact" class="btn btn-primary">Request Information</a>
                        <a href="mailto:{{ config('company.email') }}" class="btn btn-secondary">
                            {{ config('company.email') }}
                        </a>
                    </div>
                </div>

                <div class="hero-card">
                    <h2>Equipment-focused. Simple process.</h2>
                    <p>
                        Tell us what you are looking for, and our team will follow up with available options,
                        details, and next steps.
                    </p>
                </div>
            </div>
        </section>

        <section id="about" class="section">
            <div class="container narrow">
                <p class="eyebrow">About Us</p>
                <h2>Local equipment sales company</h2>
                <p>
                    {{ config('company.legal_name') }} is a Florida-based equipment sales company focused on
                    straightforward communication, practical equipment support, and responsive customer service.
                </p>
            </div>
        </section>

        <section id="equipment" class="section section-muted">
            <div class="container">
                <p class="eyebrow">What We Help With</p>
                <h2>Equipment categories</h2>

                <div class="cards">
                    <div class="card">Used Heavy Equipment</div>
                    <div class="card">Construction Equipment</div>
                    <div class="card">Farm & Utility Equipment</div>
                    <div class="card">Trucks & Trailers</div>
                    <div class="card">Equipment Sourcing</div>
                    <div class="card">Sales Support</div>
                </div>
            </div>
        </section>

        <section id="contact" class="section">
            <div class="container contact-grid">
                <div>
                    <p class="eyebrow">Contact</p>
                    <h2>Send a request</h2>
                    <p>
                        Share what type of equipment you are looking for. We will review your request
                        and get back to you.
                    </p>

                    <div class="contact-info">
                        <p><strong>Email:</strong> <a
                                href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a></p>

                        @if(config('company.address'))
                            <p>
                                <strong>Address:</strong>
                                {{ config('company.address') }},
                                {{ config('company.city') }},
                                {{ config('company.state') }}
                                {{ config('company.zip') }}
                            </p>
                        @endif
                    </div>
                </div>

                <form method="POST" action="{{ route('contact.store') }}" class="form">
                    @csrf

                    <input type="hidden" name="event_id" id="event_id">

                    <label>
                        Name *
                        <input type="text" name="name" value="{{ old('name') }}" required>
                        @error('name') <span>{{ $message }}</span> @enderror
                    </label>

                    <label>
                        Email
                        <input type="email" name="email" value="{{ old('email') }}">
                        @error('email') <span>{{ $message }}</span> @enderror
                    </label>

                    <label>
                        Phone
                        <input type="text" name="phone" value="{{ old('phone') }}">
                        @error('phone') <span>{{ $message }}</span> @enderror
                    </label>

                    <label>
                        Message
                        <textarea name="message" rows="5">{{ old('message') }}</textarea>
                        @error('message') <span>{{ $message }}</span> @enderror
                    </label>

                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </form>
            </div>
        </section>

        <footer class="footer">
            <div class="container footer-inner">
                <p>© {{ date('Y') }} {{ config('company.legal_name') }}. All rights reserved.</p>
                <div>
                    <a href="{{ route('privacy') }}">Privacy Policy</a>
                    <a href="{{ route('terms') }}">Terms & Conditions</a>
                </div>
            </div>
        </footer>
    </main>

    <script>
        const eventIdInput = document.getElementById('event_id');

        if (eventIdInput) {
            const eventId = window.crypto && window.crypto.randomUUID
                ? 'lead_' + window.crypto.randomUUID()
                : 'lead_' + Date.now() + '_' + Math.random().toString(16).slice(2);

            eventIdInput.value = eventId;
        }
    </script>
@endsection
