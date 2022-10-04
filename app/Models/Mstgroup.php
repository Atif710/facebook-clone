<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mstgroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'groupName',
        'groupImageUrl',
        'groupDescription',
        'groupPrivacy',

    ];

      public function images(){
        return $this->hasMany(Image::class);
    }
}
