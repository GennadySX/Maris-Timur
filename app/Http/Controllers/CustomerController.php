<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Device;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function update(Request $request, Customer $customer, User $user, Device $device)
    {
        $user::where('id', Auth::id())->update(['email' => $request->email]);
        $device::where('id', Auth::id())->update([
            'Number' => $request->Number,
            'Value' => $request->Value
        ]);
        $customer::where('customer_id', Auth::id())->update([
           'CustomerFio'=> $request->CustomerFio,
           'CustomerName'=> $request->CustomerName,
           'CustomerInn'=> $request->CustomerInn,
           'Chief'=> $request->Chief,
            ]);
        return response()->json(['status'=>true]);
    }


    public function updateAvatar(Request $request, User $user)
    {
        if($request->hasFile('avatar')) {
            $filename = '/uploads/'.md5(Carbon::now()).'.jpg';
            Image::make($request->file('avatar'))
                ->save(public_path($filename));
            return
                ($user::where('id', Auth::id())->update(['avatar'=>$filename]))?
                    response()->json(['status'=>true, 'file' => $filename])
                    :response()->json(['status'=>false, 'mess'=> 'Что то пошло не так']);
        }
        return response()->json(['status'=>false, 'mess'=> 'Не найдена картинка!']);
    }


    public function destroy(Customer $customer)
    {
    }
}
