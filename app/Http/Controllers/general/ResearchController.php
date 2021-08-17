<?php

namespace App\Http\Controllers\general;

use App\Models\Research;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $research = Research::all();
        return view('admin.general.research.index', compact('research'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.general.research.create');
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
            'types_name_th' => 'required',
            'types_name_en' => 'required',
            'Research_types_detail' => 'required',
            'types_status' => 'required',
        ]);

        Research::create($request->all());

        return redirect()->route('admin-general-research.index')
            ->with('success','Research Type created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $research = Research::findOrFail($id);
        return view('admin.general.research.show', compact('research'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $research = Research::findOrFail($id);
        return view('admin.general.research.edit', compact('research'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'types_name_th' => 'required',
            'types_name_en' => 'required',
            'Research_types_detail' => 'required',
            'types_status' => 'required',
        ]);

        Research::findOrFail($id)->update($request->all());

        return redirect()->route('admin-general-research.index')
            ->with('success','Research Type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Research::findOrFail($id)->delete();

        return redirect()->route('admin-general-research.index')
            ->with('success','Research Type deleted successfully');
    }
}
