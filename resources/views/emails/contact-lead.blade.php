<x-mail::message>
    # New website lead

    **Company:** {{ config('company.name') }}

    **Name:** {{ $submission->name }}

    @if($submission->email)
        **Email:** {{ $submission->email }}
    @endif

    @if($submission->phone)
        **Phone:** {{ $submission->phone }}
    @endif

    @if($submission->message)
        **Message:**

        {{ $submission->message }}
    @endif

    **IP:** {{ $submission->ip }}

    **Submitted at:** {{ $submission->created_at?->format('Y-m-d H:i:s') }}

</x-mail::message>
