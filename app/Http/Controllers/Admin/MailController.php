<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mail = Mail::orderByDesc('id')->get();
        return view('admin.mail.index' , compact('mail'));
    }

    public function view(Mail $mail){
        return view('admin.mail.view' ,compact('mail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'company' => ['required'],
            'massage' => ['required'],
        ]);

        $mail = new Mail();
        $mail->name = $data['name'];
        $mail->email = $data['email'];
        $mail->phone = $data['phone'];
        $mail->company = $data['company'];
        $mail->message = $data['massage'];

        $mail->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
