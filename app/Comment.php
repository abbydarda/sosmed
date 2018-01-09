<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['postId','userId','body'];

    public function Post()
    {
      return $this->belongsTo('App\Post','postId');
    }

    public function User()
    {
      return $this->belongsTo('App\User','userId');
    }
}
