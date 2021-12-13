<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaController extends Controller
{
    public function deleteMedia(Media $media)
    {
        $media->delete();

        return redirect()->back()->with('success_delete', 'success_delete');
    }

    public function remove_tmp()
    {
        $current_tmp_folder = collect(Storage::disk('tmp')->allDirectories());
        $all_tmp_folders_db = Work::all()->pluck('tmp_folder');

        $diff_array = $current_tmp_folder->diff($all_tmp_folders_db);

        foreach ($current_tmp_folder as $folder) {
            if ($diff_array->contains($folder)) {
                Storage::disk('tmp')->deleteDirectory($folder);
            }
        }

        dd($current_tmp_folder, $all_tmp_folders_db, $current_tmp_folder);
    }
}