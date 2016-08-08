<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'client';
    /**
     * Fields which are mass fillable
     *
     * @var array
     */
    protected $fillable = [
        'fName',
        'lName',
        'phoneNumber',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Mailing_list', 'mailing_id');
    }
}
