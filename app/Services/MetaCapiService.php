<?php

namespace App\Services;

use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class MetaCapiService
{
    public function sendLead(ContactSubmission $submission, string $sourceUrl): void
    {
        if (!$this->isEnabled()) {
            return;
        }

        $pixelId = config('services.meta.pixel_id');
        $accessToken = config('services.meta.access_token');

        $userData = [
            'client_ip_address' => $submission->ip,
            'client_user_agent' => $submission->user_agent,
        ];

        if ($submission->email) {
            $userData['em'] = [
                hash('sha256', strtolower(trim($submission->email))),
            ];
        }

        if ($submission->phone) {
            $phone = preg_replace('/\D+/', '', $submission->phone);

            if ($phone) {
                $userData['ph'] = [
                    hash('sha256', $phone),
                ];
            }
        }

        $payload = [
            'data' => [
                [
                    'event_name' => 'Lead',
                    'event_time' => now()->timestamp,
                    'event_id' => $submission->event_id,
                    'action_source' => 'website',
                    'event_source_url' => $sourceUrl,
                    'user_data' => $userData,
                    'custom_data' => [
                        'company' => config('company.name'),
                    ],
                ],
            ],
        ];

        if (config('services.meta.test_event_code')) {
            $payload['test_event_code'] = config('services.meta.test_event_code');
        }

        try {
            $response = Http::post(
                "https://graph.facebook.com/v20.0/{$pixelId}/events?access_token={$accessToken}",
                $payload
            );

            if ($response->successful()) {
                $submission->forceFill([
                    'meta_capi_sent_at' => now(),
                ])->save();

                return;
            }

            Log::warning('Meta CAPI request failed.', [
                'submission_id' => $submission->id,
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
        } catch (Throwable $exception) {
            Log::error('Meta CAPI exception.', [
                'submission_id' => $submission->id,
                'message' => $exception->getMessage(),
            ]);
        }
    }

    private function isEnabled(): bool
    {
        return filter_var(config('services.meta.capi_enabled'), FILTER_VALIDATE_BOOL)
            && filled(config('services.meta.pixel_id'))
            && filled(config('services.meta.access_token'));
    }
}
