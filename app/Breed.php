<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    protected $table = 'Breeds';
    protected $primaryKey = 'breed_id';
    protected $visible = ['cat_api_breed_id'];

    public function cats()
    {
        return $this->hasMany('App\Cats');
    }
}
