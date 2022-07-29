<?php

namespace App\Http\Controllers;

use App\Models\Response;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jorenvh\Share\Share as ShareShare;
use Illuminate\Support\Facades\DB;


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
        $users = DB::table('users')->get();
        $responses = DB::table('responses')->get();
        foreach ($responses as $response) {
            $user = User::find($response->user_id);
            if ($user) $response->user = $user->name;
        }
        return view('back-office/index', [
            'users' => $users,
            'responses' => $responses,
        ]);
    }

    public function quizz(Request $request){
        if (Auth::check()) {
            $user = User::find(auth()->user()->id);
        }else{
            return redirect('/login');
        }
        return view('front-office/quizz');
    }
    public function quizzSubmit(Request $request){
        if ($request->isMethod('POST')) {
            $response = new Response();
            $response->first_choice = $request->input('first-option');
            $response->second_choice = $request->input('second-option');
            $response->third_choice = $request->input('third-option');
            $response->fourth_choice = $request->input('fourth-option');
            $response->fifth_choice = $request->input('fifth-option');
            $response->sixth_choice = $request->input('sixth-option');
            $response->seventh_choice = $request->input('seventh-option');
            $response->eighth_choice = $request->input('eighth-option');
            $response->nineth_choice = $request->input('nineth-option');
            $response->tenth_choice = $request->input('tenth-option');
            $response->user_id = auth()->user()->id;
            // On recupere le score
            $score = 0;
            if ($response->first_choice == '1' ) $score++;
            if ($response->second_choice == '1' ) $score++;
            if ($response->third_choice == '1' ) $score++;
            if ($response->fourth_choice == '1' ) $score++;
            if ($response->fifth_choice == '1' ) $score++;
            if ($response->sixth_choice == '1' ) $score++;
            if ($response->seventh_choice == '1' ) $score++;
            if ($response->eighth_choice == '1' ) $score++;
            if ($response->nineth_choice == '1' ) $score++;
            if ($response->tenth_choice == '1' ) $score++;
            $response->score = $score;
            session(['score' => $score]);
            // On enregistre
            $response->save();
            return redirect('/result');
        }
    }
    public function result(Request $request){
        if (Auth::check()) {
            $user = User::find(auth()->user()->id);
        }else{
            return redirect('/login');
        }
        $score = session('score', '0');
        $share = new ShareShare;
        $socialShare = $share->page('https://localhost/restaurant-test-app/public/result', 'Partager sur les reseaux sociaux')
        ->facebook()
        ->whatsapp()
        ->linkedin()
        ->twitter()
        ->getRawLinks();
        return view('front-office/result', [
            'score' => $score,
            'socialShare' => $socialShare
        ]);
    }
}
