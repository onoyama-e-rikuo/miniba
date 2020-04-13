<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Team;
use App\Services\ShowTeamInfo;

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
        $auth = Auth::id();   //ログインユーザーのidを取得
        $check_id = DB::table('teams')->where('user_id', $auth)->first();//teamsテーブルのuser_idを取得

        if ($check_id === null) {
            return view('team.create');
        } else {
            
            $user_id = $check_id->user_id;
            // dd($auth);
            // dd($team);
            $teams = ShowTeamInfo::checkID($auth, $user_id);
            // dd($check_id[0]->name);
            return view('home', compact('teams'));
        }

        // dd($check_id);
        // $user_id = $check_id->user_id;
        // // dd($auth);
        // // dd($team);
        // $teams = ShowTeamInfo::checkID($auth, $user_id);
        // // dd($check_id[0]->name);
        // return view('home', compact('teams'));
    }
}


