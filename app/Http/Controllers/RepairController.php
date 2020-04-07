<?php

namespace App\Http\Controllers;

use App\Receipt;
use App\Repair;
use App\Ring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepairController extends Controller
{
    public function index()
    {
        return view('admin.repair.index')->with(['data' => Repair::where('customer_id', Auth::id())->with('device')->get()]);
    }

    public function create(Request $request, Repair $repair)
    {
        $repair->fill($request->all());
        $repair->customer_id = Auth::id();
        return ($repair->save()) ?
            response()->json(['status' => true, 'repair' => Repair::where('id', $repair->id)->with('device')->first()], 201)
            : response()->json(['status' => false, 'mess' => 'Что то пошло не так!'], 502);

    }

    public function update(Request $request, Repair $repair)
    {
        $update = $repair::where('customer_id', Auth::id())
            ->where('id', (string)$request->id);
        return ($update->update($request->all())) ?
            response()->json(['status' => true, 'receipt' => $update->get()], 202)
            : response()->json(['status' => false, 'mess' => 'Что то пошло не так!', $update], 502);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Repair $repair
     * @return \Illuminate\Http\Response
     */
    public function show(Repair $repair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Repair $repair
     * @return \Illuminate\Http\Response
     */
    public function edit(Repair $repair)
    {
        //
    }



    public function destroy($id, Repair $repair)
    {
        $repair::where('id', $id)->where('customer_id', Auth::id())->delete();
        return back();
    }
}
