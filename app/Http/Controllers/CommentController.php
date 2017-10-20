<?php

namespace App\Http\Controllers;
use App\ticketComment;
use DB;
use Illuminate\Http\Request;
use App\ticketInformation;
use App\userInformation;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{

    public function addComment(Request $request, $user_ticket_id)
    {
        $this->validate($request, [
            'comment' => 'required',
        ]);

        $all_request = $request->all();
        $ticket_info = ticketInformation::where('user_ticket_id', $user_ticket_id)->first();
        $ticket_info->status = $all_request['status'];
        $ticket_info->save();

        $comment = new ticketComment();
        $comment->ticket_comment_id = rand(pow(10, 3-1), pow(10, 3)-1);
        $comment->user_ticket_id = $ticket_info->user_ticket_id;
        $comment->comment = $all_request['comment'];
        $comment->status = $all_request['status'];

        $comment->save();


        return redirect()->back()->with("alert", "Your comment has been submitted.");
    }

    public function showAllComments()
    {
        $all_comments = ticketComment::all();
        return $all_comments->toJson();
    }

    public function showComments($user_ticket_id)
    {
        $ticket_info = ticketInformation::find($user_ticket_id);
        $comment = ticketComment::where('user_ticket_id',$user_ticket_id)->get();

        if($comment)
        {
            return view('issue/all_comments', $comment, compact('ticket_info', 'comment'));
        }
        else
        {
            return view('issue/all_comments', compact('ticket_info'));
        }

    }

    public function showCommentsCust($user_ticket_id)
    {
        $ticket_info = ticketInformation::find($user_ticket_id);
        $comment = ticketComment::where('user_ticket_id',$user_ticket_id)->get();


        if($comment)
        {
            return view('issue/customer/all_comments_customer', $comment, compact('ticket_info', 'comment'));
        }
        else
        {
            return view('issue/customer/all_comments_customer', compact('ticket_info'));
        }
    }


}
