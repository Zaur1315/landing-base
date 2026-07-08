<?php

namespace App\Services;

use App\Mail\ContactLeadMail;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactNotificationService
{
    public function send(ContactSubmission $submission): void
    {
        $recipient = config('mail.contact_recipient_email') ?: env('CONTACT_RECIPIENT_EMAIL');

        if (!config('services.resend.key') || !$recipient) {
            Log::warning('Contact email was not sent because Resend or recipient email is not configured.', [
                'submission_id' => $submission->id,
            ]);

            return;
        }

        try {
            Mail::to($recipient)->send(new ContactLeadMail($submission));

            $submission->forceFill([
                'email_sent_at' => now(),
            ])->save();
        } catch (Throwable $exception) {
            Log::error('Contact email sending failed.', [
                'submission_id' => $submission->id,
                'message' => $exception->getMessage(),
            ]);
        }
    }
}
