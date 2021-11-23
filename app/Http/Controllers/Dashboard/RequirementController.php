<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequirementRequest;
use App\Models\Option;
use App\Models\Requirement;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reqs = Requirement::whenSearch(request()->search)
        ->whenStatus(request()->status)
        ->whenType(request()->type)
        ->latest()
         ->paginate(6);

        //to make reset button in blade
        $is_searched = request()->search || request()->status || request()->type;

        return view('dashboard.requirements.index')->with(['reqs' => $reqs, 'is_searched' => $is_searched]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.requirements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(RequirementRequest $request)
    {
        $data = $request->except('options');
        $req = Requirement::create($data);
        foreach ($request->options as $option) {
            Option::create([
                'name' => $option['option_name'],
                'requirement_id' => $req->id,
             ]);
        }

        return redirect()->route('dashboard.requirements.index')->with('success', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Requirement $requirement)
    {
        return view('dashboard.requirements.edit')->with(['requirement' => $requirement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(RequirementRequest $request, Requirement $requirement)
    {
        $data = $request->except(['options']);
        if ($request->has('options')) {
            foreach ($request->options as $option) {
                Option::create([
                'name' => $option['option_name'],
                'requirement_id' => $requirement->id,
             ]);
            }
        }
        $requirement->update($data);

        return redirect()->route('dashboard.requirements.index')->with('success_edit', 'success_edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requirement $requirement)
    {
        $requirement->delete();

        return redirect()->route('dashboard.requirements.index')->with('success_delete', 'success_delete');
    }
}