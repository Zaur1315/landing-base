@extends('layouts.app')

@section('content')
    <main class="site">
        <header class="topbar">
            <div class="container topbar-inner">
                <a href="{{ route('home') }}" class="brand">
                    <img src="/logo.png" alt="logo" id="header-logo">
                </a>

                <nav class="nav">
                    <a href="#inventory-support">Equipment</a>
                    <a href="#process">Process</a>
                    <a href="#contact">Contact</a>
                </nav>

                <a href="#contact" class="header-cta">Request Info</a>
            </div>
        </header>

        <section class="hero">
            <div class="hero-bg">
                <img src="/images/image-1.webp" alt="{{ config('company.name') }} heavy equipment">
            </div>

            <div class="container hero-inner">
                <div class="hero-copy">
                    <p class="eyebrow">New Port Richey, Florida</p>

                    <h1>Used heavy equipment without the runaround.</h1>

                    <p class="hero-text">
                        {{ config('company.name') }} helps buyers source practical construction, utility,
                        farm, truck, and commercial equipment with clear communication and a simple request process.
                    </p>

                    <div class="hero-actions">
                        <a href="#contact" class="btn btn-primary">Send Equipment Request</a>
                        <a href="mailto:{{ config('company.email') }}" class="btn btn-ghost">
                            {{ config('company.email') }}
                        </a>
                    </div>
                </div>

                <div class="hero-panel">
                    <img src="/logo.png" alt="logo" id="ban-logo">
                    <h2>Equipment sourcing support for real jobsite needs.</h2>
                    <p>
                        Tell us what you are looking for. We will review the request and follow up with practical next
                        steps.
                    </p>
                </div>
            </div>
        </section>

        <section class="intro-strip">
            <div class="container intro-grid">
                <div>
                    <span class="strip-label">01</span>
                    <strong>Heavy Equipment</strong>
                    <p>Construction, utility, farm, trucks, trailers, and commercial-use machines.</p>
                </div>

                <div>
                    <span class="strip-label">02</span>
                    <strong>Local Florida Company</strong>
                    <p>Based in New Port Richey and focused on straightforward buyer communication.</p>
                </div>

                <div>
                    <span class="strip-label">03</span>
                    <strong>Simple Follow-Up</strong>
                    <p>Submit the request, share your target equipment, and our team responds directly.</p>
                </div>
            </div>
        </section>

        <section id="inventory-support" class="section equipment-section">
            <div class="container equipment-layout">
                <div class="section-heading">
                    <p class="eyebrow">Equipment Support</p>
                    <h2>Tell us what type of machine you need.</h2>
                    <p>
                        We keep the process direct. Whether you are comparing used equipment options or trying to locate
                        a specific machine type, send the details and we will follow up.
                    </p>
                </div>

                <div class="equipment-image">
                    <img src="/images/image-2.webp" alt="Used equipment yard">
                </div>
            </div>

            <div class="container equipment-cards">
                <article>
                    <span>01</span>
                    <h3>Construction Equipment</h3>
                    <p>Loaders, excavators, backhoes, skid steers, compactors, and jobsite support equipment.</p>
                </article>

                <article>
                    <span>02</span>
                    <h3>Farm & Utility Equipment</h3>
                    <p>Utility tractors, attachments, trailers, and machines for property or land-use work.</p>
                </article>

                <article>
                    <span>03</span>
                    <h3>Trucks & Trailers</h3>
                    <p>Commercial trucks, transport support, trailers, and work-ready vehicle requests.</p>
                </article>

                <article>
                    <span>04</span>
                    <h3>Equipment Sourcing</h3>
                    <p>Share the equipment type, budget range, and intended use so we can respond with next steps.</p>
                </article>
            </div>
        </section>

        <section id="process" class="section process-section">
            <div class="container process-layout">
                <div class="process-media">
                    <img src="/images/image-3.webp" alt="Heavy equipment detail">
                </div>

                <div>
                    <p class="eyebrow">Straightforward Process</p>
                    <h2>No overbuilt system. Just clear communication.</h2>

                    <div class="process-list">
                        <div>
                            <span>1</span>
                            <p>Send the equipment type, condition expectations, and contact details.</p>
                        </div>

                        <div>
                            <span>2</span>
                            <p>We review your request and check what information or options are available.</p>
                        </div>

                        <div>
                            <span>3</span>
                            <p>You receive a direct follow-up with practical details and possible next steps.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section proof-section">
            <div class="container proof-card">
                <div>
                    <p class="eyebrow">Built For Buyers</p>
                    <h2>Practical equipment support from a local company.</h2>
                </div>

                <div class="proof-points">
                    <p>Used heavy equipment inquiries</p>
                    <p>Commercial and utility machine requests</p>
                    <p>Florida-based contact and support</p>
                    <p>Simple form, direct response</p>
                </div>
            </div>
        </section>

        <section id="contact" class="section contact-section">
            <div class="container contact-layout">
                <div class="contact-copy">
                    <p class="eyebrow">Contact 50 Equipment</p>
                    <h2>Request equipment information.</h2>
                    <p>
                        Send a short message with the machine type, intended use, budget range, or any specific details.
                        We will review your request and get back to you.
                    </p>

                    <div class="contact-image">
                        <img src="/images/image-4.webp" alt="Equipment sales support">
                    </div>

                    <div class="contact-details">
                        <p>
                            <strong>Email</strong>
                            <a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a>
                        </p>

                        <p>
                            <strong>Address</strong>
                            {{ config('company.address') }},
                            {{ config('company.city') }},
                            {{ config('company.state') }}
                            {{ config('company.zip') }}
                        </p>
                    </div>
                </div>

                <form method="POST" action="{{ route('contact.store') }}" class="lead-form">
                    @csrf

                    <input type="hidden" name="event_id" id="event_id">

                    <label>
                        <span>Name *</span>
                        <input type="text" name="name" value="{{ old('name') }}" required>
                        @error('name') <small>{{ $message }}</small> @enderror
                    </label>

                    <label>
                        <span>Email</span>
                        <input type="email" name="email" value="{{ old('email') }}">
                        @error('email') <small>{{ $message }}</small> @enderror
                    </label>

                    <label>
                        <span>Phone</span>
                        <input type="text" name="phone" value="{{ old('phone') }}">
                        @error('phone') <small>{{ $message }}</small> @enderror
                    </label>

                    <label>
                        <span>What equipment are you looking for?</span>
                        <textarea name="message" rows="6">{{ old('message') }}</textarea>
                        @error('message') <small>{{ $message }}</small> @enderror
                    </label>

                    <button type="submit" class="btn btn-primary form-btn">Submit Request</button>
                </form>
            </div>
        </section>

        <footer class="footer">
            <div class="container footer-inner">
                <div>
                    <img src="/logo.png" alt="logo" id="footer-logo">
                </div>

                <div class="footer-links">
                    <a href="{{ route('privacy') }}">Privacy Policy</a>
                    <a href="{{ route('terms') }}">Terms & Conditions</a>
                    <a href="{{ route('webmail') }}">Webmail</a>
                </div>
            </div>
        </footer>

        @if(session('success'))
            <div class="success-popup" id="success-popup">
                <div class="success-popup-card">
                    <button type="button" class="success-popup-close" onclick="closeSuccessPopup()">×</button>

                    <p class="eyebrow">Request Received</p>
                    <h3>Thank you.</h3>
                    <p>{{ session('success') }}</p>
                </div>
            </div>
        @endif
    </main>

    <script>
        const eventIdInput = document.getElementById('event_id');

        if (eventIdInput) {
            const eventId = window.crypto && window.crypto.randomUUID
                ? 'lead_' + window.crypto.randomUUID()
                : 'lead_' + Date.now() + '_' + Math.random().toString(16).slice(2);

            eventIdInput.value = eventId;
        }

        function closeSuccessPopup() {
            const popup = document.getElementById('success-popup');

            if (popup) {
                popup.remove();
            }
        }

        @if(config('services.meta.pixel_id') && $leadEventId)
        fbq('track', 'Lead', {}, {
            eventID: @json($leadEventId)
        });
        @endif
    </script>
@endsection
