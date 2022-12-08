<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Topic
 *
 * @package App
 * @property string $title
*/
class Upload extends Model
{
    use SoftDeletes;

    protected $fillable = ['description'];

    public static function boot()
    {
        parent::boot();

        Upload::observe(new \App\Observers\UserActionsObserver);
    }

    // public function questions()
    // {
    //     return $this->hasMany(Question::class, 'upload_id')->withTrashed();
    // }
}
