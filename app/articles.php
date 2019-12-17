<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    public function categories(){
        
        
        //return $this->hasOne(Categories::class);
        
        return $this->belongsTo(categories::class);

    }
}
