<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social_Profile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'social_profiles';
    /**
     * Fields which are mass fillable
     *
     * @var array
     */
    protected $fillable = [
        'twitter',
        'facebook',
        'googleplus',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
