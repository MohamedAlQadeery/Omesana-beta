<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactusRequest;
use App\Models\Contactus;
use App\Models\User;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Notification;

class ContactusController extends Controller
{
    public function index()
    {
        return view('site.contactus.index');
    }

    public function store(ContactusRequest $request)
    {
        $user = User::where('type', 1)->first();

        $message = Contactus::create($request->validated());
        $user->notify(new ContactNotification($message));
        // Notification::send($admin, new ContactNotification($message));

        return redirect()->route('site.contactus')->with('contact_success', 'contact_success');
    }
}