<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;
    public function getAuthPassword()
    {
        return $this->person_password;
    }

    protected $table = 'physical_person';
    public $incrementing = false;
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'name', 'email', 'person_password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'person_password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function create(array $array){
        DB::table('maxes')->increment('phys_person_id', 1);
        $array['id'] = DB::table('maxes')->max('phys_person_id');
        $array['person_status'] = 'A';
        return static::query()->create($array);
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'usergroup', 'alias', 'groupcode');
    }
}
