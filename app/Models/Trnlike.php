<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trnlike extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'trnlikes';
    protected $fillable = [
        'postlike',
        'userId',
        'postId',
        'addDate', 
    ];
}
