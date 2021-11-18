<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DropzoneController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->has('files')) {
            $folder = uniqid().'-'.now()->timestamp;
            foreach ($request->file('files') as $file) {
                Storage::disk('tmp')->put($folder, $file);
                // $file->move(public_path().'/images/tmp/'.$folder, $filename);
            }

            return $folder; // remove evertyhing before first /
        }

        return '';
    }

    public function uploadMultiple(Request $request, $folder)
    {
        if ($request->has('files')) {
            $file = $request->file('files')[0];
            Storage::disk('tmp')->put($folder, $file);
        }

        return $folder;
    }
}