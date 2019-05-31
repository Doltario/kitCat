<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table = 'Pictures';
    protected $primaryKey = 'picture_id';
    protected $visible = ['picture_url', 'picture_description'];
    protected $fillable = ['picture_description', 'picture_url'];

    public function cats()
    {
        return $this->belongsToMany('App\Cat', 'rel_pictures_cats', 'fk_picture_id', 'fk_cat_id');
    }
}
