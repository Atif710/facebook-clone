<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;

class FeedController extends Controller
{
    public function feed(){
        return view('front.feed');
    }



    public function add_post(Request $request){

        // dd($request);
        
        $feed = new Feed;
        // $image = $request->image;
        // $imagename = time() . '.' . $image->getClientOriginalExtension();
        // $request->image->move('product', $imagename);
        // $feed->text_back_ground = $imagename;

        $feed->caption = $request->caption;
        // $feed->postContentText = $request->users;
        
        $feed->save();
        return redirect()->back();



    }
}
