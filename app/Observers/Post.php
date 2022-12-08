<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Observers\Image;
class Post extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'title',
        'author',
        'body',
        'cover',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

}
