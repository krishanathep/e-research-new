<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $progress = Progress::all();
        return view('admin.progress.index', compact('progress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.progress.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $progress = Progress::findOrFail($id);
        return view('admin.progress.show', compact('progress'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $progress = Progress::findOrFail($id);
        return view('admin.progress.edit', compact('progress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // drop foreingnkey
        Schema::disableForeignKeyConstraints();

        $this->validate($request, [
            'proposal_sub_id' => 'required',
            'project_prograss_type' => 'required',
            'project_prograss_expense_budget' => 'required',
            'project_prograss_status' => 'required',
        ]);

        Progress::findOrFail($id)->update($request->all());

        return redirect()->route('admin-progress.index')
            ->with('success','Project Progress updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Progress::findOrFail($id)->delete();

        return redirect()->route('admin-progress.index')
            ->with('success','Project Progres Deleted successfully');
    }
}
