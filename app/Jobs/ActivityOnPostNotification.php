<?php

namespace App\Jobs;

use App\User;
use App\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentNotifierOtherUser;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ActivityOnPostNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $comment;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        User::otherCommentedOnPost($this->comment->commentable)
            ->get()
            ->filter(function (User $user) {
                return $user->id !== $this->comment->user_id;
            })->map(function (User $user) {
                Mail::to($user)->send(
                    new CommentNotifierOtherUser($this->comment, $user)
                );
            });
    }
}
