<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function index()
    {
        return view('dashboard.settings.index');
    }

    public function store(Request $request)
    {
        $data = $request->except(['logo']);
        if ($request->logo) {
            $this->remove_previous($request->logo);
            Image::make($request->logo)
            ->resize(300, 82)
            ->encode('png')
            ->save(public_path('images/').'logo_300_82.png');

            Image::make($request->logo)
            ->resize(98, 67)
            ->encode('png')
            ->save(public_path('images/').'logo_98_67.png');
        }//end of if

        setting($data)->save();

        return redirect()->route('dashboard.settings.index')->with('success_edit', 'success');
    }

    private function remove_previous($image)
    {
        Storage::disk('public_uploads')->delete($image);
    }
}