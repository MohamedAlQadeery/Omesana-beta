<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Mail\ReplyMail;
use App\Models\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    public function index()
    {
        $messages = Contactus::whenEmail(request()->email)
        ->whenIsRead(request()->is_read)
        ->latest()
        ->paginate(10);

        //to make reset button in blade
        $is_searched = request()->email || request()->is_read;

        return view('dashboard.contactus.index')->with(['messages' => $messages, 'is_searched' => $is_searched]);
    }

    public function show($id)
    {
        $message = Contactus::findOrFail($id);
        $message->update(['is_read' => 2]);

        return view('dashboard.contactus.show')->with(['message' => $message]);
    }

    public function replay(Request $request, $id)
    {
        $request->validate(['body' => 'required']);
        $message = Contactus::findOrFail($id);
        $reply = $message->replies()->create(['body' => $request->body]);

        Mail::to($message->email)->send(new ReplyMail($reply));

        return redirect()->route('dashboard.contactus.show', $message->id)->with('success_reply', 'success_reply');
    }
}