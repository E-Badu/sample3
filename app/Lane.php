<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lanes extends Model
{
    //
    public function tasks(){
    	$this->hasMany('\App\Task');
    }
}
