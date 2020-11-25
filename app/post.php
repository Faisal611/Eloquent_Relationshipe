<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'user_id','title','description','status',
        ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tags (){
        return $this->belongsToMany(Tag::class);
    }
}
