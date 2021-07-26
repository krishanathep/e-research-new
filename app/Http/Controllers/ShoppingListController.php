<?php

namespace App\Http\Controllers;

use App\Models\Shoppinglist;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoppinglist = Shoppinglist::paginate(10);

        return view('admin.shoppinglist.index', compact('shoppinglist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shoppinglist.create');
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
     * @param  \App\Models\Shoppinglist  $shoppinglist
     * @return \Illuminate\Http\Response
     */
    public function show(Shoppinglist $shoppinglist)
    {
        return view('admin.shoppinglist.show', compact('shoppinglist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shoppinglist  $shoppinglist
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoppinglist $shoppinglist)
    {
        return view('admin.shoppinglist.edit', compact('shoppinglist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shoppinglist  $shoppinglist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoppinglist $shoppinglist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shoppinglist  $shoppinglist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoppinglist $shoppinglist)
    {
        //
    }
}
