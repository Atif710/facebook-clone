<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Feed;


class Mstuser extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'mstuser';

    protected $fillable = [
        'userName',
        'email',
        'email_verified_at',
        'remember_token',
        'password',
        'DOB',
        'martialStatus',
        'profileImageUrl',
        'gender',
        'city',
        'postCode',
        'phoneNo',
        'country',
        'lat',
        'long',
        'address',
        'following',
        'follower',
        'totalPosts',
        'userTypeId',
        'avatarType',
        'flatColor',
        'profileImageText',
        'isShuffleEnable',
        'isActive',
        'isPrivate',
        'groupNotification',
        'postNotification',
        'allNotification',
        'stealthtime',
        'isStealth',
        'stealthDuration',
        'addDate',
        'editDate',
        'created_at',
        'updated_at'
    ];


    // relationship 
    public function mstPost(){
        return $this->hasMany(Feed::class);
    }

    
}
