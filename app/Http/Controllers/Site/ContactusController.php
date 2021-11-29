<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactusRequest;
use App\Models\Contactus;

class ContactusController extends Controller
{
    public function index()
    {
        return view('site.contactus.index');
    }

    public function store(ContactusRequest $request)
    {
        Contactus::create($request->validated());

        return redirect()->route('site.contactus')->with('contact_success', 'contact_success');
    }
}