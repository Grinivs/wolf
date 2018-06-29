<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
	public function getSignin() {
      return view('signin');
    }

    public function postSignin(Request $request) {
      $this->validate($request, [
        'email' => 'email|required',
        'password' => 'required|min:6'
      ]);

      if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
        return redirect()->back();
      }
      else {
        // code...
      }
      return redirect()->back();
    }

    public function getProfile() {
      return view('profile');
    }

    public function getLogout(){
      Auth::logout();
      return view('home');
    }
}