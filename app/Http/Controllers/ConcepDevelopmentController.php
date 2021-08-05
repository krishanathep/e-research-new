<?php

namespace App\Http\Controllers;

use App\Models\Concepdevelopment;
use Illuminate\Http\Request;

class ConcepDevelopmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concepdevelopment = Concepdevelopment::all();

        return view('admin.concepdevelopment.index', compact('concepdevelopment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.concepdevelopment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'shopping_list_id' => 'required',
            'concept_dev_name' => 'required',
            'concept_dev_details' => 'required',
            'concept_dev_type' => 'required',
            'concept_ResearchType_id' => 'required',
            'concept_dev_status' => 'required',
        ]);

        Concepdevelopment::create($request->all());

        return redirect()->route('admin-concepdevelopment.index')
            ->with('success','Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Concepdevelopment  $concepdevelopment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $concepdevelopment = Concepdevelopment::findOrFail($id);
        return view('admin.concepdevelopment.show', compact('concepdevelopment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Concepdevelopment  $concepdevelopment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $concepdevelopment = Concepdevelopment::findOrFail($id);
        return view('admin.concepdevelopment.edit', compact('concepdevelopment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Concepdevelopment  $concepdevelopment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'shopping_list_id' => 'required',
            'concept_dev_name' => 'required',
            'concept_dev_details' => 'required',
            'concept_dev_type' => 'required',
            'concept_ResearchType_id' => 'required',
            'concept_dev_status' => 'required',
        ]);

        Concepdevelopment::findOrFail($id)->update($request->all());
        return redirect()->route('admin-concepdevelopment.index')
            ->with('success','Concept Development Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Concepdevelopment  $concepdevelopment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Concepdevelopment::findOrFail($id)->delete();
        return redirect()->route('admin-concepdevelopment.index')
            ->with('success','Concept Development Deleted successfully');
    }
}
