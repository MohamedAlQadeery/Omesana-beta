<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaController extends Controller
{
    public function deleteMedia(Media $media)
    {
        $media->delete();

        return redirect()->back()->with('success_delete', 'success_delete');
    }
}