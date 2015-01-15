<?php
namespace FernandoG\Commentable\Traits;

trait AuthorableTrait {

    public function authoredComments()
    {
        return $this->morphMany('Comment', 'authorable');
    }

    // public function addComment($body, $commentable)
    // {
    //     return Comment::add($body, $this, $commentable);
    // }
}
