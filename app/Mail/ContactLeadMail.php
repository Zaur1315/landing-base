<?php

namespace App\Mail;

use App\Models\ContactSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactLeadMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        public ContactSubmission $submission
    )
    {
    }

    public function build(): self
    {
        return $this
            ->subject('New website lead - ' . config('company.name'))
            ->markdown('emails.contact-lead');
    }
}
