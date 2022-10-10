<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;
use App\Models\User;
use App\Models\Mstuser;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\Trnlike;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{
    public function index()
    {
        // $feed = Feed::all()->take(5);

        // foreach($feed as $fed){
        //     $getFeedID =  $fed->Id;

        // }
        $comment  = Comment::all();
        
        $feed = Feed::select('mstposts.*','mstuser.*')->join('mstuser','mstposts.userId','=','mstuser.userId')->take(5)->get();
        // $user = User::all()->where('id','=',$getFeedID);
        return view('front.index', compact('feed', 'comment'));
    }

    public function get_feed(){
        // $getUserId = auth()->user()->id;
            $feed = Feed::all();
            $user = User::all();
            return view('front.index', compact('feed','user'));
    }

    public function add_reply(Request $request){
        
        $reply = new Reply;
        $reply->reply = $request->reply;
      
        $reply->postId = $request->postId;
        
        $reply->name = $request->userName;
        // print_r($reply);
        // die();
        return view('front.index',compact('reply'));
        $reply->save();

        return redirect()->back();
    }

    public function add_like($postid,$like){

       return json_encode(array($postid,$like));
    
         
    }

}
