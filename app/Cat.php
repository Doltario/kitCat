<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'Cats';
    protected $primaryKey = 'cat_id';
    protected $visible = ['cat_name', 'loof_document_id'];
}
