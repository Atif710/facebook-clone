<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;    
//use App\Http\Controllers\Request;
use App\Models\Mstpost;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class MstpostController extends Controller
{




    public function view()
    {

        return view('dashboard');
    }

    public function store(Request $request)
    {
      
        if($request->hasFile("cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

            $mstpost =new Mstpost([
                "caption" =>$request->caption,
                "location"=>$request->location,
                "activity"=>$request->activity, 
                "sharelink"=>$request->sharelink,
                "tag"      =>$request->tag,
                "gif"      =>$request->gif,
                "cover" =>$imageName, 
                              
            ]);
           $mstpost->save();
        }

            if($request->hasFile("images")){
                $files=$request->file("images");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request['post_id']=$mstpost->id;
                    $request['image']=$imageName;
                    $file->move(\public_path("/images"),$imageName);
                    Image::create($request->all());

                }
            }

         

    }
}
