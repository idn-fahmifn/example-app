<?php

namespace App\Http\Controllers;

use App\Models\Hello;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hello = Hello::paginate(10);
        return view('page', compact('hello'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Hello::create($input);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hello  $hello
     * @return \Illuminate\Http\Response
     */
    public function show(Hello $hello)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hello  $hello
     * @return \Illuminate\Http\Response
     */
    public function edit(Hello $hello)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hello  $hello
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hello $hello)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hello  $hello
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hello $hello)
    {
        //
    }
}
