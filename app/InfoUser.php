<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    //
    protected $table = 'info_users';

    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'cf'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
