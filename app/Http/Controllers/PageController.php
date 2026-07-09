<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('home', [
            'leadEventId' => session()->pull('meta_lead_event_id'),
        ]);
    }

    public function privacy(): View
    {
        return view('legal.privacy');
    }

    public function terms(): View
    {
        return view('legal.terms');
    }

    public function webmail(): RedirectResponse
    {
        $url = config('services.webmail.url');

        abort_unless(filled($url), 503, 'Webmail is not configured.');

        return redirect()->away($url);
    }

    public function robots(): Response
    {
        $content = implode("\n", [
            'User-agent: *',
            'Allow: /',
            '',
            'Sitemap: ' . url('/sitemap.xml'),
            '',
        ]);

        return response($content, 200, [
            'Content-Type' => 'text/plain',
        ]);
    }

    public function sitemap(): Response
    {
        $urls = [
            [
                'loc' => url('/'),
                'priority' => '1.0',
            ],
            [
                'loc' => url('/privacy.html'),
                'priority' => '0.5',
            ],
            [
                'loc' => url('/terms.html'),
                'priority' => '0.5',
            ],
        ];

        return response()
            ->view('sitemap', [
                'urls' => $urls,
            ])
            ->header('Content-Type', 'application/xml');
    }
}
