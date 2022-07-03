<?php

namespace App\Http\Controllers;

use App\Models\Comment as CommentModel;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function getCommentByForumID($forumID){

        $comments = CommentModel::where('forum_id', $forumID)->paginate(4);

        return $comments;
    }

    public function createComment(Request $comment, $forumID){

        $validatedData = $comment->validate([
            'comment' => ['required']
        ]);

        $newComment = new CommentModel();
        
        $newComment->member_id = session()->get('userID');
        $newComment->forum_id = $forumID;
        $newComment->date = date('Y-m-d H:i:s');
        $newComment->comment = $validatedData['comment'];
        
        // dd($newComment);
        $newComment->save();

        return back()->with('commentSuccess', 'Success to add new comment');

    }

    public function updateComment(Request $comment, $id){

        $validatedData = $comment->validate([
            'newComment' => ['required']
        ]);
        
        $newComment = CommentModel::where('id', $id)->first();
        $newComment->comment = $comment->newComment;

        $newComment->save();

        return back()->with('updateCommentSuccess', 'Success to update comment');

    }


    public function deleteComment(Request $request, $id){

        $comment = CommentModel::where('id', $id)->first();
        
        $comment->delete();

        return back()->with('deleteCommentSuccess', 'Success to delete comment');

    }
}
