<?php

namespace App\Mail;

use App\User;
use App\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CommentNotifierOtherUser extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $comment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Comment $comment, User $user)
    {
        $this->user    = $user;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.posts.comment-notifier-other');
    }
}
