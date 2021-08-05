<?php

namespace App\Http\Controllers;

use App\Models\Proposaldevelopment;
use Illuminate\Http\Request;

class ProposalDevelopmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proposaldevelopment = Proposaldevelopment::all();

        return view('admin.proposaldevelopment.index', compact('proposaldevelopment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.proposaldevelopment.create');
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
            'concept_dev_id' => 'required',
            'proposal_dev_name' => 'required',
            'proposal_dev_details' => 'required',
            'proposal_ResearchType_id' => 'required',
            'proposal_dev_type' => 'required',
            'proposal_dev_status' => 'required',
        ]);

        Proposaldevelopment::create($request->all());

        return redirect()->route('admin-proposaldevelopment.index')
            ->with('success','Proposal developmemt created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proposaldevelopment  $proposaldevelopment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proposaldevelopment = Proposaldevelopment::findOrFail($id);
        return view('admin.proposaldevelopment.show', compact('proposaldevelopment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proposaldevelopment  $proposaldevelopment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proposaldevelopment = Proposaldevelopment::findOrFail($id);
        return view('admin.proposaldevelopment.edit', compact('proposaldevelopment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proposaldevelopment  $proposaldevelopment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'concept_dev_id' => 'required',
            'proposal_dev_name' => 'required',
            'proposal_dev_details' => 'required',
            'proposal_ResearchType_id' => 'required',
            'proposal_dev_type' => 'required',
            'proposal_dev_status' => 'required',
        ]);

        Proposaldevelopment::findOrFail($id)->update($request->all());
        return redirect()->route('admin-proposaldevelopment.index')
            ->with('success','Proposal developmemt updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proposaldevelopment  $proposaldevelopment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proposaldevelopment::findOrFail($id)->delete();
        return redirect()->route('admin-proposaldevelopment.index')
            ->with('success','Proposal development deleted successfully');
    }
}
