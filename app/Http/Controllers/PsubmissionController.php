<?php

namespace App\Http\Controllers;

use App\Models\Psubmission;
use Illuminate\Http\Request;

class PsubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psubmission = Psubmission::all();

        return view('admin.psubmission.index', compact('psubmission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.psubmission.create');
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
     * @param  \App\Models\Psubmision  $psubmision
     * @return \Illuminate\Http\Response
     */
    public function show(Psubmission $psubmission)
    {
        return view('admin.psubmission.show', compact('psubmission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Psubmision  $psubmision
     * @return \Illuminate\Http\Response
     */
    public function edit(Psubmission $psubmission)
    {
        return view('admin.psubmission.edit', compact('psubmission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Psubmision  $psubmision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Psubmission $psubmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Psubmision  $psubmision
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psubmission $psubmission)
    {
        //
    }
}
