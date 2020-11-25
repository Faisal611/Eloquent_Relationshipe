<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $fillable =[
        'user_id','state','city','country',
    ];
    public function user (){
        return $this->belongsTo(User::class);
    }
}
