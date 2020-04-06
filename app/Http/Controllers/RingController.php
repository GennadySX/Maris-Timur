<?php

namespace App\Http\Controllers;

use App\Ring;
use Illuminate\Http\Request;

class RingController extends Controller
{

    public function index()
    {
        return view('admin.calling.index');
    }


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function show(Ring $ring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function edit(Ring $ring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ring $ring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ring $ring)
    {
        //
    }
}
