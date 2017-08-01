<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('registration/create');
    }

    public function store(Request $request)
    {
        // 1. validate the form.
        // 2. Create and save the user.
        // 3. Sign them in.
        // 4. Redirect to the home page.

        // Validate
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        // Create user
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]); // this user is stored in db using eloquent create command

        // Sign them in.
        auth()->login($user); //using auth helper

        \Mail::to($user)->send(new Welcome($user)); // name of the class in Mail folder
        // Redirect to home page
        return redirect()->home();
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
