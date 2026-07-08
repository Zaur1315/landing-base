<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSubmissionRequest;
use App\Models\ContactSubmission;
use App\Services\ContactNotificationService;
use App\Services\MetaCapiService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function store(
        ContactSubmissionRequest   $request,
        ContactNotificationService $notificationService,
        MetaCapiService            $metaCapiService,
    ): RedirectResponse
    {
        $eventId = $request->input('event_id') ?: 'lead_' . Str::uuid()->toString();

        $submission = ContactSubmission::create([
            'company_key' => config('company.key'),
            'name' => $request->string('name')->toString(),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
            'event_id' => $eventId,
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        $notificationService->send($submission);

        $metaCapiService->sendLead(
            submission: $submission,
            sourceUrl: $request->headers->get('referer') ?: url('/')
        );

        session()->flash('meta_lead_event_id', $eventId);

        return redirect()
            ->to(route('home') . '#contact')
            ->with('success', 'Thank you. Your request has been received.');
    }
}
