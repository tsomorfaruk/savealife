<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function post_user(){
        return $this->hasOne("App\User", 'id','user_id');
    }
    public function donors(){
        return $this->hasMany("App\PostDonor", 'post_id','id');
    }
}
