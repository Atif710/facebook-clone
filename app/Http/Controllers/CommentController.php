<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Http\Models\Reply;
use App\Models\Feed;
use App\Models\Mstuser;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function entercomment(Request $request){
        $comment = new Comment;
        //  $comment = Comment::select('mstpost.*', 'mstuser.*')->join('mstuser', 'mstpost.userId', '=', 'mstuser userId');
        // $comment = User::where('id',$comment->id)->first();
        // $comment = Feed::where('Id',$comment->Id)->first();

        $comment->comment = $request->comment;
        
        $comment->save();
        return redirect()->back();
    }

    // public function reply(Request $request){
    //    $reply = new ModelsReply;
       
    //    $reply = 
    // }
}
