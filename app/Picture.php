<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table = 'Pictures';
    protected $primaryKey = 'picture_id';
    protected $visible = ['picture_url'];

    public function cats()
    {
        return $this->belongsToMany('App\Cat');
    }
}
