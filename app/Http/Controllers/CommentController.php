<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CommentController extends Controller
{

    use AuthorizesRequests;


 public function store(Request $request, Post $post)
{
    $request->validate([
        'content' => 'required|min:3|max:1000',
    ]);

    // 1. Create comment
    $comment = $post->comments()->create([
        'user_id' => auth()->id(),
        'content' => $request->content,
        'is_approved' => true,
    ]);

    /**
     * ---------------------------------------------------
     * A. NOTIFY POST OWNER
     * ---------------------------------------------------
     */
    if ($post->user_id) {  // avoid notifying yourself
        Notification::create([
            'user_id' => $post->user_id,
            'type' => 'comment',
            'data' => json_encode([
                'comment_id' => $comment->id,
                'comment' => $comment->content,
                'post_title' => $post->title,
                'commenter' => auth()->user()->name,
            ]),
        ]);
    }

    /**
     * ---------------------------------------------------
     * B. NOTIFY ALL PREVIOUS COMMENTERS
     * ---------------------------------------------------
     */
    $previousCommenters = $post->comments()
        ->where('user_id', '!=', auth()->id())   // exclude current user
        ->where('user_id', '!=', $post->user_id) // exclude post owner (already notified)
        ->select('user_id')
        ->distinct()
        ->get();

    foreach ($previousCommenters as $user) {
        Notification::create([
            'user_id' => $user->user_id,
            'type' => 'comment_thread',
            'data' => json_encode([
                'comment_id' => $comment->id,
                'comment' => $comment->content,
                'post_title' => $post->title,
                'commenter' => auth()->user()->name,
                'message' => 'New comment added to a post you also commented on.',
            ]),
        ]);
    }

    return back()->with('success', 'Comment posted successfully!');
}


    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);

        $comment->delete();

        return back()->with('success', 'Comment deleted successfully!');
    }

    public function storeReply(Request $request, $comment)
    {
        // Logic to store a reply to the comment with ID $comment
    }

    public function like($comment)
    {
        // Logic to like the comment with ID $comment
    }

    public function unlike($comment)
    {
        // Logic to unlike the comment with ID $comment
    }



}
