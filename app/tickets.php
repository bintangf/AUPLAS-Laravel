<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    public function user(){
      return @this->belongsTo('App\User');
    }

}