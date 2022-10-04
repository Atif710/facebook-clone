<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Mstuser;
class Feed extends Model
{
    use HasFactory;

    public function likes()
    {
        return $this->hasMany('App\Models\Like', 'postId')->sum();
    }
    public $timestamps = false;
    protected $table = 'mstpost';
    protected $fillable = [
        'isBusiness',
        'groupld',
        'caption',
        'privacy',
        'content_type',
        'postType',
        'postcontent',
        'font_color',
        'text_back_ground',
        'image',
        'posted_date',
        'expire_at',
        'interest',
        'thumbnailUrl',
        'active',
        'profileName',
        'profileImageUrl',
        'location',
        'postContentText',
        'totalLike',
        'totalComment',
        'isLikeOn',
        'isCommentOn',
        'editDate',
    ];


    public function mstUser(){
        return $this->belongsTo(Mstuser::class);
    } 
}
