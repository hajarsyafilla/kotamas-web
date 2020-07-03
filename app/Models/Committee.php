<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    public $timestamps = false;

    public function position()
    {
        return $this->belongsTo(CommitteePosition::class, 'committee_position_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

}
