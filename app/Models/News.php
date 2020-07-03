<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;
use Helper;

class News extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['published_at'];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'N/A',
        ]);
    }

    /**
     * Accessors & Mutators
     *
     * @param  string  $value
     * @return string
     */

    public function getPublishedAtAttribute($value)
    {
        return Helper\Date::dbToLocale($value);
    }
}
