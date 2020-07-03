<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;
use Helper;

class UserGroup extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function users() {
        return $this->hasMany(User::class);
    }

    /**
     * Mutators
     *
     * @return String
     */
}
