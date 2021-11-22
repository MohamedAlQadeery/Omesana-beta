<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;
use App\Models\Work;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        $works = Work::whenSearch(request()->search)
        ->whenStatus(request()->status)
        ->whenType(request()->type)
        ->whenAddress(request()->address)
        ->latest()
        ->paginate(10);

        //to make reset button in blade
        $is_searched = request()->search || request()->status || request()->type || request()->address;

        return view('dashboard.works.index')->with(['works' => $works, 'is_searched' => $is_searched]);
    }

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
    public function store(WorkRequest $request)
    {
        $data = $request->except(['files', '_token']);
        $data['slug'] = Str::of($data['name'])->slug('-');
        $work = Work::create($data);

        $files = Storage::disk('tmp')->allFiles($work->tmp_folder);
        foreach ($files as $file) {
            $this->fileUpload($work, $file, 'work');
        }

        return redirect()->route('dashboard.works.index')->with('success', 'success');
    }

    public function show(Work $work)
    {
        return view('dashboard.works.show')->with(['work' => $work]);
    }

    public function edit(Work $work)
    {
        return view('dashboard.works.edit')->with(['work' => $work]);
    }

    public function update(WorkRequest $request, Work $work)
    {
        $data = $request->except(['_method', '_token', 'files']);
        if ($request->input('files')[0] != null) {
            $files = Storage::disk('tmp')->allFiles($work->tmp_folder);
            foreach ($files as $file) {
                $this->fileUpload($work, $file, 'work');
            }
        }
        $work->update($data);

        return redirect()->route('dashboard.works.index')->with('success_edit', 'success_edit');
    }
}