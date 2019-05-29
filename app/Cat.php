<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'Cats';
    protected $primaryKey = 'cat_id';
    protected $visible = ['cat_id', 'cat_name', 'fk_loof_document_id'];
    protected $fillable = ['cat_name'];
    
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
        return $this->belongsToMany('App\Picture', 'RelPicturesCats', 'cat_id', 'picture_id');
    }
}
