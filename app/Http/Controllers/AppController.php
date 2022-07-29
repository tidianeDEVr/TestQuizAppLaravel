<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index(){
        $user = new User();
        if (Auth::check()) {
            $user = User::find(auth()->user()->id);
        }
        return view('front-office/index', [
            'user' => $user,
        ]);

    }

    public function dashboard(){
        if (Auth::check()) {
            $user = User::find(auth()->user()->id);
        }else{
            return redirect('/login');
        }
        return view('back-office/index');
    }

    public function quizz(){
        if (Auth::check()) {
            $user = User::find(auth()->user()->id);
        }else{
            return redirect('/login');
        }

        return view('front-office/quizz');
    }
}
