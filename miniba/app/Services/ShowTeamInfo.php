<?php

namespace App\Services;

use App\Models\Team;

class ShowTeamInfo{
    
    public static function checkID($auth_id, $team_id)
    {
        //上記idが一致している場合はuser_idの中身を変数に入れて渡す
        if ($auth_id === $team_id) {
            $teams = Team::where('user_id', $auth_id)->get();
        } else {
            $teams = "";
        }

        return $teams;
    }


}
