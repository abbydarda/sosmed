<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['userId','title'];

    public function User()
    {
        return $this->belongsTo('App\User','userId');
    }
}
