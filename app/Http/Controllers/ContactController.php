<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSubmissionRequest;
use App\Models\ContactSubmission;
use App\Services\ContactNotificationService;
use App\Services\MetaCapiService;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function store(
        ContactSubmissionRequest   $request,
        ContactNotificationService $notificationService,
        MetaCapiService            $metaCapiService,
    ): RedirectResponse
    {
        $submission = ContactSubmission::create([
            'company_key' => config('company.key'),
            'name' => $request->string('name')->toString(),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
            'event_id' => $request->input('event_id'),
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        $notificationService->send($submission);

        $metaCapiService->sendLead($submission, url()->previous());

        return redirect()
            ->route('thank-you')
            ->with('success', 'Thank you. Your request has been received.');
    }
}
