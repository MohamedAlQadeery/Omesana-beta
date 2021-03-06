<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Work;

class LandingPageController extends Controller
{
    public function index()
    {
        $works = Work::where('status', 1)->latest()->limit(8)->get();

        return view('site.landing')->with(['works' => $works]);
    }
}