<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class PostDonor extends Model
{
    //

    public function user(){
        return $this->belongsTo(User::class);
    }
}
