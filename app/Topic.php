<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'cards';
    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = 'card_id';


}
