<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    protected $fillable = [
        'company_key',
        'name',
        'email',
        'phone',
        'message',
        'event_id',
        'ip',
        'user_agent',
        'email_sent_at',
        'meta_capi_sent_at',
    ];

    protected $casts = [
        'email_sent_at' => 'datetime',
        'meta_capi_sent_at' => 'datetime',
    ];
}
