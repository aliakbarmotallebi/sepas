<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::latest()->paginate(10);

        return view(
            'dashboard.comments.index',
            compact('comments')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return view(
            'dashboard.comments.show',
            compact('comment')
        );
    }

    public function replyStore(Request $request, Comment $comment)
    {
        $reply = new Comment;
        $reply->message = $request->get('message');
        $reply->owner()->associate($request->user());
        $reply->parent_id = $comment->id;
        $reply->status = Comment::$PUBLISHED_STATUS;

        $model = $comment->commentable;
        $model->comments()->save($reply);

        return redirect()->route('dashboard.comments.index');
    }
}
