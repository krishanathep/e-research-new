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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proposaldevelopment  $proposaldevelopment
     * @return \Illuminate\Http\Response
     */
    public function show(Proposaldevelopment $proposaldevelopment)
    {
        return view('admin.proposaldevelopment.show', compact('proposaldevelopment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proposaldevelopment  $proposaldevelopment
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposaldevelopment $proposaldevelopment)
    {
        return view('admin.proposaldevelopment.edit', compact('proposaldevelopment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proposaldevelopment  $proposaldevelopment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proposaldevelopment $proposaldevelopment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proposaldevelopment  $proposaldevelopment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposaldevelopment $proposaldevelopment)
    {
        //
    }
}
