<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;
use Helper;

class Download extends Model
{
    public function category()
    {
        return $this->belongsTo(DownloadCategory::class)->withDefault([
            'name' => 'N/A',
        ]);
    }

}
