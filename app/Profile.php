<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /** connection
     * @var array */
    protected $connection = 'mysql';
    protected $fillable = [
        'owner_id',
        'owner_type',
        'owner',
        'owner_user_id',
    ];

    public function owner(){
        return $this->morphTo();
    }
}
