<?php

namespace App\Http\Controllers;

use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function updatepassword(Request $request){
        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::where('id', auth()->user()->id)->first();
        $user->password = bcrypt($request->password);
        $user->save();

        Toastr::warning('Account password updated successfully', 'Warning', ["positionClass" => "toast-bottom-right"]);
        return redirect()->back();
    }
}
