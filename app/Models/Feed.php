<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'mstpost';
    protected $fillable = [
        // 'userld',
        // 'isBusiness',
        // 'groupld',
        'caption',
        // 'privacy',
        // 'content_type',
        // 'postType',
        // 'font_color',
        // 'text_back_ground',
        // 'posted_date',
        // 'expire_at',
        // 'interest',
        // 'thumbnailUrl',
        // 'active',
        // 'profileName',
        // 'profileImageUrl',
        // 'location',
        // 'postContentText',
        // 'totalLike',
        // 'totalComment',
        // 'isLikeOn',
        // 'isCommentOn',
        // 'editDate',
    ];
}
