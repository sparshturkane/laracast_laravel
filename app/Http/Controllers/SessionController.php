<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function index()
    {

    }

    public function create()
    {
        return view('sessions/create');
    }

    public function store()
    {
        // 1. Atempt to authenticate the user
        // 2. If not, redirect back.
        // 3. If so, sign them in.
        // 4. Redirect to the home page.

        //authenticate
        // dd(request('password'));
        if (! auth()->attempt(request(['email', 'password']))){
            return back()->withErrors([
                'message' => 'Please check your credentials'
            ]);
        }

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

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
