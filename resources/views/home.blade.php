@extends('layouts.app')

@section('content')
    <main class="site">
        <x-site-header/>

        <section class="hero" id="hero">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <p class="eyebrow">New Port Richey, Florida</p>

                    <h1>Equipment sales support with a clear request process.</h1>

                    <p class="hero-text">
                        {{ config('company.name') }} helps buyers start equipment inquiries for construction,
                        farm, utility, truck, trailer, and commercial equipment needs.
                    </p>

                    <div class="hero-actions">
                        <a href="#submit-request" class="btn btn-primary">Submit Equipment Request</a>
                    </div>
                </div>

                <div class="hero-media">
                    <img src="/images/image-1.webp" alt="{{ config('company.name') }} equipment yard">

                    <div class="hero-stat-card">
                        <span>Florida Equipment Contact</span>
                        <strong>{{ config('company.city') }}, {{ config('company.state') }}</strong>
                        <p>{{ config('company.address') }}, {{ config('company.zip') }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="snapshot-section">
            <div class="container snapshot-grid">
                <article>
                    <span>01</span>
                    <h3>Construction</h3>
                    <p>Requests for loaders, excavators, skid steers, attachments, and jobsite equipment.</p>
                </article>

                <article>
                    <span>02</span>
                    <h3>Farm & Utility</h3>
                    <p>Equipment support for land, property, maintenance, farm, and utility work.</p>
                </article>

                <article>
                    <span>03</span>
                    <h3>Truck & Trailer</h3>
                    <p>Commercial truck, trailer, hauling, and transport-related equipment requests.</p>
                </article>
            </div>
        </section>

        <section id="request-types" class="section equipment-section">
            <div class="container section-header split-header">
                <div>
                    <p class="eyebrow">Equipment Requests</p>
                    <h2>Focused equipment inquiries for real buying needs.</h2>
                </div>

                <p>
                    Send the machine category, condition expectations, location, timing, and any must-have details.
                    The goal is to make the first response useful, not generic.
                </p>
            </div>

            <div class="container equipment-grid">
                <article class="equipment-card equipment-primary">
                    <img src="/images/image-2.webp" alt="Equipment inspection">

                    <div class="equipment-primary-content">
                        <span>Primary Request Details</span>
                        <h3>What helps us understand the equipment need.</h3>

                        <p>
                            A strong request should explain what the machine will be used for, the preferred condition,
                            any size or capability requirements, and whether you are comparing options or ready to move
                            forward.
                        </p>

                        <div class="equipment-check-grid">
                            <div>
                                <strong>Machine Type</strong>
                                <p>Loader, excavator, skid steer, tractor, truck, trailer, attachment, or utility
                                    equipment.</p>
                            </div>

                            <div>
                                <strong>Condition Range</strong>
                                <p>Work-ready, lower-hour, budget-conscious, newer model year, or specific feature
                                    requirements.</p>
                            </div>

                            <div>
                                <strong>Use Case</strong>
                                <p>Construction, land work, farm support, hauling, property maintenance, or commercial
                                    operations.</p>
                            </div>

                            <div>
                                <strong>Timing</strong>
                                <p>Browsing, comparing, actively sourcing, or ready for a direct follow-up.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="equipment-card equipment-side">
                    <img src="/images/image-3.webp" alt="Truck and trailer equipment">

                    <div>
                        <span>Commercial Support</span>
                        <h3>Trucks, trailers, and hauling equipment.</h3>
                        <p>
                            Useful for buyers looking for transport, commercial work, or equipment movement support.
                        </p>
                    </div>
                </article>

                <article class="equipment-card equipment-side">
                    <img src="/images/image-4.webp" alt="Equipment yard lineup">

                    <div>
                        <span>Machine Categories</span>
                        <h3>Construction, utility, farm, and property equipment.</h3>
                        <p>
                            Requests can include machine type, attachment needs, size range, and operating context.
                        </p>
                    </div>
                </article>
            </div>
        </section>

        <section id="inquiry-flow" class="section process-section">
            <div class="container process-grid">
                <div class="process-copy">
                    <p class="eyebrow">Request Process</p>
                    <h2>Simple steps from inquiry to follow-up.</h2>
                    <p>
                        The process is built around a clear form submission, internal review, and direct response.
                        No public inventory system is required for the buyer to start the conversation.
                    </p>
                </div>

                <div class="process-steps">
                    <article>
                        <strong>01</strong>
                        <div>
                            <h3>Submit the request</h3>
                            <p>Provide contact information, equipment category, intended use, and timing.</p>
                        </div>
                    </article>

                    <article>
                        <strong>02</strong>
                        <div>
                            <h3>Review the details</h3>
                            <p>The request is checked for category, use case, condition expectations, and missing
                                details.</p>
                        </div>
                    </article>

                    <article>
                        <strong>03</strong>
                        <div>
                            <h3>Receive follow-up</h3>
                            <p>You receive a practical response based on the information submitted through the form.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="request-standards" class="section standards-section">
            <div class="container standards-grid">
                <div class="standards-title">
                    <p class="eyebrow">Request Standards</p>
                    <h2>Keep the message specific.</h2>
                </div>

                <div class="standards-list">
                    <article>
                        <span>Category</span>
                        <p>What type of equipment are you asking about?</p>
                    </article>

                    <article>
                        <span>Workload</span>
                        <p>What job or use case does the equipment need to support?</p>
                    </article>

                    <article>
                        <span>Location</span>
                        <p>Where will the equipment be used, picked up, or delivered?</p>
                    </article>

                    <article>
                        <span>Priority</span>
                        <p>Are you browsing, comparing, or ready for follow-up?</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="submit-request" class="section contact-section">
            <div class="container contact-grid">
                <div class="contact-copy">
                    <p class="eyebrow">Contact</p>
                    <h2>Send your equipment request.</h2>

                    <p>
                        Use the form to contact {{ config('company.name') }}. Include the equipment type,
                        intended use, location, and any condition or timing requirements.
                    </p>

                    <div class="contact-info">
                        <p>
                            <strong>Email</strong>
                            <a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a>
                        </p>

                        <p>
                            <strong>Location</strong>
                            {{ config('company.address') }},
                            {{ config('company.city') }},
                            {{ config('company.state') }}
                            {{ config('company.zip') }}
                        </p>
                    </div>
                </div>

                <form method="POST" action="{{ route('contact.store') }}" class="lead-form">
                    <p class="eyebrow">Send us a message</p>

                    @csrf

                    <input type="hidden" name="event_id" id="event_id">

                        <input type="text" class="form-i" name="name" value="{{ old('name') }}" placeholder="Name *" required>
                        @error('name') <small>{{ $message }}</small> @enderror

                        <input type="email" class="form-i" name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email') <small>{{ $message }}</small> @enderror

                        <input type="text" class="form-i" name="phone" placeholder="Phone" value="{{ old('phone') }}">
                        @error('phone') <small>{{ $message }}</small> @enderror

                        <textarea name="message" class="form-i" placeholder="Equipment details" rows="6">{{ old('message') }}</textarea>
                        @error('message') <small>{{ $message }}</small> @enderror

                    <button type="submit" class="btn btn-primary form-btn">Submit Request</button>
                </form>
            </div>
        </section>

        <x-site-footer/>

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
