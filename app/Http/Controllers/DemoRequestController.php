<?php

namespace App\Http\Controllers;

use App\Models\DemoRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DemoRequestController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'job_title' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:30'],
            'wants_updates' => ['nullable', 'boolean'],
        ]);

        $validated['wants_updates'] = (bool) ($validated['wants_updates'] ?? false);

        DemoRequest::create($validated);

        return redirect()->route('registration.pending')->with('demo_success', 'Thanks. Our team will contact you within 24 hours.');
    }
}
