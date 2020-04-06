<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.customer.index');
    }


    public function create(Request $request)
    {
        //
        return response()->json(['status' => true], 200);
    }


    public function edit(Customer $customer)
    {
        //
    }

    public function update(Request $request, Customer $customer)
    {
        //
    }


    public function destroy(Customer $customer)
    {
    }
}
