<?php

namespace App\Http\Controllers;

use App\Ring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RingController extends Controller
{

    public function index()
    {
        return view('admin.calling.index')->with(['data' => Ring::where('customer_id', Auth::id())->get()]);
    }


    public function create(Request $request, Ring $ring)
    {

        $ring->fill($request->all());
        $ring->customer_id =  Auth::id();
        return ($ring->save()) ?
            response()->json(['status' => true, 'ring'=>$ring], 201)
            :  response()->json(['status' => false, 'mess'=>'Что то пошло не так!'], 502);
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
