<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class PostDonor extends Model
{
    //

    public function user(){
        return $this->belongsTo('App\User', 'donor_id', 'id');
    }

    public function post(){
        return $this->belongsTo('App\Post', 'post_id', 'id');
    }
}
