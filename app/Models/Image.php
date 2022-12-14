<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class Image extends Model
{
   
    protected $fillable=[
        'image',
    ];

    public function posts(){
        return $this->belongsTo(Feed::class);
    }
}
