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
        
        $feed = Feed::select('mstpost.*','mstuser.*')->join('mstuser','mstpost.userId','=','mstuser.userId')->take(5)->get();
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

    public function like(Request $request){
        $like = new Trnlike;
        if ( $like->postlike = $request->postlike == 'like') {
           
            $like->like = 1;
           
        }else{
            $like->dislike = 1;
        }

        $like->save();

        return redirect()->back();

    }



    // public function add_post(Request $request)
    // {


    //     dd($request);
    //     $user = Auth::user();
    //     $userid = $user->id;
    //     $user = User::where('id', '=', $userid)->get();

    //     $feed = new Feed;

    //     $validatedData = $request->validate([
    //         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

    //     ]);

    //     $name = $request->file('image')->getClientOriginalName();

    //     $path = $request->file('image')->store('public/product');


    //     $save = new Feed();

    //     $save->name = $name;
    //     $save->path = $path;



    //     $feed->userid = $request->userid;

    //     $feed->caption = $request->caption;
    //     $feed->postcontent = $request->postcontent;
    //     $feed->postContentText = $request->users;
    //     $feed->image = $request->name;
    //     $feed->save();
    //     return redirect()->back();
    // }
}
