<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\New_;
use App\Http\Requests\TeamRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $search = $request->input('search');

        $teams_info = DB::table('teams');
        // ->select('id','name', 'member', 'message')
        // ->get();

        if ($search !== null) {
            //全角スペースを半角に
            $search_split = mb_convert_kana($search, 's');
            //空白で区切る
            $search_split2 = preg_split('/[\s]/', $search_split, PREG_SPLIT_NO_EMPTY);
            //単語をループで回す
            foreach ($search_split2 as $value) {
                $teams_info->where('name', 'like', '%' .$value. '%');
            }
        };

        $teams = $teams_info->select('id', 'name', 'member', 'message')->get();
        

        return view('team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('team.create');
    }



    //入力した内容の確認ページを表示
    public function confirm(TeamRequest $request)
    {   
        //入力された情報を変数に代入
        $inputs = $request->all();

        //入力内容を表示
        return view('team.confirm',compact('inputs'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $team = new Team;
        
        $team->name = $request->input('name');
        $team->ruby = $request->input('ruby');
        $team->member = $request->input('member');
        $team->email = $request->input('email');
        $team->url = $request->input('url');
        $team->message = $request->input('message');
        $team->user_id = Auth::id();

        $team->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $team = Team::find($id);

        return view('team.show', compact('team'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $team = Team::find($id);

        return view('team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $team = Team::find($id);

        $team->name = $request->input('name');
        $team->ruby = $request->input('ruby');
        $team->member = $request->input('member');
        $team->email = $request->input('email');
        $team->url = $request->input('url');
        $team->message = $request->input('message');
        $team->user_id = Auth::id();

        $team->save();

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $team = Team::find($id);

        $team->delete();

        return redirect('/home');
    }
}
