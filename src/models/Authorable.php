<?php namespace Petersuhm\Commentable;

use Illuminate\Database\Eloquent\Model;

class Authorable extends Model {

    public function comments()
    {
        return $this->morphMany('Comment', 'commentable');
    }
}