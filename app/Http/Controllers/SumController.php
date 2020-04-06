<?php

namespace App\Http\Controllers;

use App\Sum;
use Illuminate\Http\Request;

class SumController extends Controller
{
    public function index()
    {
        return view('admin.sum.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sum  $sum
     * @return \Illuminate\Http\Response
     */
    public function show(Sum $sum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sum  $sum
     * @return \Illuminate\Http\Response
     */
    public function edit(Sum $sum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sum  $sum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sum $sum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sum  $sum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sum $sum)
    {
        //
    }
}
