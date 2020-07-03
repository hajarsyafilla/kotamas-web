<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;
use Helper;

class DownloadCategory extends Model
{
    public function downloads()
    {
        return $this->hasMany(Download::class);
    }
}
