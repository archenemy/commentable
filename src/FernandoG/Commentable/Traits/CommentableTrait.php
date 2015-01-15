<?php
namespace FernandoG\Commentable\Traits;

trait CommentableTrait {

    public function comments()
    {
        return $this->morphMany('Comment', 'commentable');
    }

    public function addComment($body, $authorable)
    {
        return Comment::add($body, $authorable, $this);
    }
}
