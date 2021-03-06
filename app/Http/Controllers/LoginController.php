<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    //
    public function login(Request $request) {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            $user = User::where('email', $request->email)->first();
            if ($user->is_admin()) {
                $strategies = DB::table('strategies')->get();
                return redirect()->route('dashboard', compact($strategies));
            } else if ($user->is_moderator()) {
                $comments = DB::table('comments')->get();
                return redirect()->route('moderator-dashboard', compact($comments));
            }
            return redirect('/');
        }
        return redirect()->back();
    }
}
