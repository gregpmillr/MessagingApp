<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailing_List extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mailing_list';
    /**
     * Fields which are mass fillable
     *
     * @var array
     */
    protected $fillable = [
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function client()
    {
        return $this->hasMany('App\Client');
    }
}
