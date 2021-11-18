<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Work;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    use FileUploadTrait;

    public function create()
    {
        $tmp_folder = 'work-'.now()->timestamp;
        Storage::disk('tmp')->makeDirectory($tmp_folder);

        return view('dashboard.works.create')->with([
            'tmp_folder' => $tmp_folder,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['files', '_token']);
        $data['slug'] = Str::of($data['title'])->slug('-');
        $work = Work::create($data);

        $files = Storage::disk('tmp')->allFiles($work->tmp_folder);
        foreach ($files as $file) {
            $this->fileUpload($work, $file, 'work');
        }

        dd('success');
    }
}