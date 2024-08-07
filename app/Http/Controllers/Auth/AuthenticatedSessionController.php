<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(LoginRequest $request){
        $validatedData = $request->validated();

        if ( !Auth::attempt($validatedData)){
            throw ValidationException::withMessages([
                "emain" => "Sorry, those credentials do not match"
            ]);
        }

        request()->session()->regenerate();

        return redirect('/businesses');
    }

    public function destroy(){
        Auth::logout();

        return redirect('/');
    }
}
