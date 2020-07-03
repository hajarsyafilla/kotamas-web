<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class PersonnelDepartment extends Model
{
    public $timestamps = false;
    public $incrementing = false;

    public function personnels()
    {
        return $this->hasMany(Personnel::class);
    }
}
