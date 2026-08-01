@extends('layouts.app')

@section('content')
    <main class="site">
        <x-site-header />

        <section class="hero">
            <div class="container hero-shell">
                <div class="hero-copy">
                    <p class="eyebrow">Loxahatchee, Florida</p>
                    <h1>Equipment help for buyers who know the work comes first.</h1>
                    <p class="hero-text">
                        {{ config('company.name') }} supports customers looking for heavy, farm, utility,
                        truck, trailer, and construction equipment with a direct local request process.
                    </p>

                    <div class="hero-actions">
                        <a href="#contact" class="btn btn-primary">Start a Request</a>
                        <a href="#inventory-support" class="btn btn-secondary">View Equipment Support</a>
                    </div>
                </div>

                <div class="hero-visual">
                    <div class="hero-image-card">
                        <img src="/images/image-1.webp" alt="{{ config('company.name') }} equipment yard">
                    </div>

                    <div class="hero-location-card">
                        <span>Local Contact</span>
                        <strong>{{ config('company.city') }}, {{ config('company.state') }}</strong>
                        <p>{{ config('company.address') }}, {{ config('company.zip') }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="trust-band">
            <div class="container trust-grid">
                <div>
                    <span>01</span>
                    <strong>Used Equipment Requests</strong>
                </div>

                <div>
                    <span>02</span>
                    <strong>Farm, Utility & Commercial Support</strong>
                </div>

                <div>
                    <span>03</span>
                    <strong>Simple Local Follow-Up</strong>
                </div>
            </div>
        </section>

        <section id="inventory-support" class="section local-support-section">
            <div class="container local-support-layout">
                <div class="section-copy">
                    <p class="eyebrow">Equipment Support</p>
                    <h2>Tell us what you are trying to get done.</h2>
                    <p>
                        Instead of overcomplicating the process, we start with the work you need the machine to handle.
                        Send the machine type, timing, and location, and we will follow up with practical next steps.
                    </p>
                </div>

                <div class="support-note">
                    <strong>Good requests include:</strong>
                    <ul>
                        <li>equipment type or category</li>
                        <li>preferred condition or budget range</li>
                        <li>delivery or pickup expectations</li>
                        <li>how soon you need a response</li>
                    </ul>
                </div>
            </div>

            <div class="container category-rows">
                <article>
                    <img src="/images/image-2.webp" alt="Farm and utility equipment">
                    <div>
                        <span>Farm & Utility</span>
                        <h3>Equipment for land, property, and utility work.</h3>
                    </div>
                </article>

                <article>
                    <img src="/images/image-3.webp" alt="Construction equipment">
                    <div>
                        <span>Construction Equipment</span>
                        <h3>Loaders, excavators, skid steers, and jobsite machines.</h3>
                    </div>
                </article>

                <article>
                    <img src="/images/image-4.webp" alt="Commercial trucks and trailers">
                    <div>
                        <span>Trucks & Trailers</span>
                        <h3>Commercial hauling, trailers, and work-ready vehicle requests.</h3>
                    </div>
                </article>
            </div>
        </section>

        <section id="process" class="section field-process-section">
            <div class="container field-process-layout">
                <div class="field-image">
                    <img src="/images/image-5.webp" alt="Outdoor equipment yard">
                </div>

                <div class="field-steps">
                    <p class="eyebrow">How It Works</p>
                    <h2>A simple request path from first message to follow-up.</h2>

                    <div class="step-list">
                        <article>
                            <span>Step 1</span>
                            <h3>Share the machine need</h3>
                            <p>Send the type of equipment, intended use, preferred condition, and contact details.</p>
                        </article>

                        <article>
                            <span>Step 2</span>
                            <h3>We review the request</h3>
                            <p>Our team checks the information and determines what details are needed for a useful reply.</p>
                        </article>

                        <article>
                            <span>Step 3</span>
                            <h3>You get a direct response</h3>
                            <p>We follow up with practical information, next steps, or additional questions if needed.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="section buyer-guide-section">
            <div class="container buyer-guide">
                <div>
                    <p class="eyebrow">Buyer Guide</p>
                    <h2>Before reaching out, include the details that matter.</h2>
                </div>

                <div class="guide-cards">
                    <article>
                        <strong>Machine Category</strong>
                        <p>Construction, farm, utility, hauling, attachment, or commercial equipment.</p>
                    </article>

                    <article>
                        <strong>Use Case</strong>
                        <p>Land work, jobsite support, hauling, property maintenance, or farm operations.</p>
                    </article>

                    <article>
                        <strong>Timing</strong>
                        <p>Let us know if you are browsing, comparing, or ready to move forward soon.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="contact" class="section contact-section">
            <div class="container contact-layout">
                <div class="contact-card">
                    <p class="eyebrow">Contact A & D Heavy Equipment</p>
                    <h2>Send your equipment request.</h2>
                    <p>
                        Tell us what machine you are looking for and how it will be used. We will review the request
                        and respond with the next practical step.
                    </p>

                    <div class="contact-facts">
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

                <div class="contact-photo">
                    <img src="/images/image-6.webp" alt="A & D Heavy Equipment">
                </div>
            </div>
        </section>

        <x-site-footer />

    </main>
@endsection
