<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoofDocuments extends Model
{
    protected $table = 'Loof_documents';
    protected $primaryKey = 'loof_document_id';
    protected $visible = ['loof_document_url'];
}
