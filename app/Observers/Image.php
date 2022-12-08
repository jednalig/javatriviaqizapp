<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Observers\Post;
class Image extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'image',
        'post_id',
    ];

    public function posts(){
        return $this->belongsTo(Post::class);
    }
}
