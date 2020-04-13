<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Team extends Model 
{
    //Userモデルとのリレーションを定義
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
