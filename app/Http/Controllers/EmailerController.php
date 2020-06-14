<?php

namespace App\Http\Controllers;

use App\Emailer;
use App\Mail\Mailer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class EmailerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request, Emailer $emailer)
    {
        if ($emailer->fill($request->all())->save() && $emailer->id) {
            Mail::send(new Mailer($request->message, $request->subject, User::where('id', $request->receiver_id)->first()->email));
            return $this->json(['send' => true]);
        }
        return  $this->json(['err' => 'email not sent'], 200, false);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Emailer $emailer
     * @return Response
     */
    public function show(Emailer $emailer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Emailer $emailer
     * @return Response
     */
    public function edit(Emailer $emailer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Emailer $emailer
     * @return Response
     */
    public function update(Request $request, Emailer $emailer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Emailer $emailer
     * @return Response
     */
    public function destroy(Emailer $emailer)
    {
        //
    }
}
