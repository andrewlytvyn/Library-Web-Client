<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Document extends Model
{
    protected $table = 'document';
    protected $primaryKey = 'doc_id';

public function getAnnotationAttribute()
{
    $annot = $this->annot1.$this->annot2.$this->annot3.$this->annot4;
    $fragments = DB::table('doc_annotation')->where('doc_id', $this->doc_id )->get();
    foreach ($fragments as $fragment ){
        $annot.=$fragment->fragment;
    }
    return $annot;
}
}
