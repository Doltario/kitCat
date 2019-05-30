<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'Cats';
    protected $primaryKey = 'cat_id';
    // protected $visible = ['cat_id', 'cat_name', 'loof_document'];
    protected $fillable = ['cat_name', 'fk_loof_document_id'];
    
    public function loofDocument()
    {
        return $this->hasOne('App\LoofDocument', 'fk_loof_document_id');
    }

    public function breed()
    {
        return $this->belongsTo('App\Breed', 'fk_breed_id');
    }

    public function pictures()
    {
        return $this->belongsToMany('App\Picture', 'rel_pictures_cats', 'fk_cat_id', 'fk_picture_id');
    }
}
