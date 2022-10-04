<?php

namespace App\Http\Controllers;

use App\Models\Mstgroup;
use App\Models\Image;
use Illuminate\Http\Request;

class MstgroupController extends Controller
{
    public function store(Request $request)
    {
     
      
        if($request->hasFile("groupImageUrl")){
            $file=$request->file("groupImageUrl");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("groupImageUrl/"),$imageName);

            $mstgroup =new Mstgroup([
                "groupName" =>$request->groupName,
                "groupDescription"=>$request->groupDescription,
                "groupPrivacy"=>$request->groupPrivacy,
                "groupImageUrl" =>$imageName, 
                              
            ]);
           $mstgroup->save();
        }

            if($request->hasFile("images")){
                $files=$request->file("images");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request['post_id']=$mstgroup->id;
                    $request['image']=$imageName;
                    $file->move(\public_path("/images"),$imageName);
                    Image::create($request->all());

                }
            }
            return view('front.groups');

         

    }
}
