<?php

namespace App\Http\Controllers;

use App\Receipt;
use App\Ring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceiptController extends Controller
{
    public function index()
    {
        return view('admin.receipt.index')->with(['data' => Receipt::where('customer_id', Auth::id())->with('device')->get()]);
    }


    public function create(Request $request, Receipt $receipt)
    {
        $receipt->fill($request->all());
        $receipt->customer_id =  Auth::id();
        return ($receipt->save()) ?
            response()->json(['status' => true, 'receipt'=>$receipt], 201)
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
     * @param  \App\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function show(Receipt $receipt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipt $receipt)
    {
        //
    }


    public function update(Request $request, Receipt $receipt)
    {
        $update = $receipt::where('customer_id', Auth::id())
            ->where('id', (string)$request->id);
        return ($update->update($request->all())) ?
            response()->json(['status' => true, 'receipt'=>$update->get()], 202)
            :  response()->json(['status' => false, 'mess'=>'Что то пошло не так!', $update], 502);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipt $receipt)
    {
        //
    }
}
