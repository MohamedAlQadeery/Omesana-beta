<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use App\Models\Work;

class WelcomeController extends Controller
{
    public function index()
    {
        $works_count = Work::all()->count();
        $arc_works_count = Work::whereType(1)->get()->count();
        $int_works_count = Work::whereType(2)->get()->count();
        $unread_messages_count = Contactus::whereIsRead(1)->get()->count();

        $most_viewd_works = Work::orderBy('view_count', 'desc')->limit(5)->get();

        return view('dashboard.welcome')->with([
            'works_count' => $works_count,
            'arc_works_count' => $arc_works_count,
            'int_works_count' => $int_works_count,
            'unread_messages_count' => $unread_messages_count,
            'most_viewd_works' => $most_viewd_works,
        ]);
    }
}