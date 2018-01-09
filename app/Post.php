<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        protected $fillable = ['userId','title','body'];

        public function comment()
        {
          return $this->hasMany('App\Comment');
        }
}
