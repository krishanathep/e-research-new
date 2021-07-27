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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Concepdevelopment  $concepdevelopment
     * @return \Illuminate\Http\Response
     */
    public function show(Concepdevelopment $concepdevelopment)
    {
        return view('admin.concepdevelopment.show', compact('concepdevelopment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Concepdevelopment  $concepdevelopment
     * @return \Illuminate\Http\Response
     */
    public function edit(Concepdevelopment $concepdevelopment)
    {
        return view('admin.concepdevelopment.edit', compact('concepdevelopment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Concepdevelopment  $concepdevelopment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Concepdevelopment $concepdevelopment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Concepdevelopment  $concepdevelopment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concepdevelopment $concepdevelopment)
    {
        //
    }
}
