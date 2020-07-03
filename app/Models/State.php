<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps = false;
    public $incrementing = false;

    public function committees()
    {
        return $this->hasMany(Committee::class);
    }
}
