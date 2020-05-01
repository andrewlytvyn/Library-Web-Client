<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'grouplist';
    protected $primaryKey = 'code';

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
