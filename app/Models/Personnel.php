<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    public $timestamps = false;

    public function department()
    {
        return $this->belongsTo(PersonnelDepartment::class, 'personnel_department_id');
    }

}
