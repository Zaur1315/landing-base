@extends('layouts.app')

@section('title', 'Thank You | ' . config('company.name'))

@section('content')
    <main class="site">
        <section class="hero hero-centered">
            <div class="container narrow">
                <p class="eyebrow">Request Received</p>
                <h1>Thank you.</h1>
                <p class="hero-text">
                    Your request has been received. Our team will review it and contact you shortly.
                </p>
                <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
            </div>
        </section>
    </main>

    @if(config('services.meta.pixel_id') && $leadEventId)
        <script>
            fbq('track', 'Lead', {}, {
                eventID: '{{ $leadEventId }}'
            });
        </script>
    @elseif(config('services.meta.pixel_id'))
        <script>
            fbq('track', 'Lead');
        </script>
    @endif
@endsection
