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
        if($annot == "")
            $annot = NULL;
        return $annot;
    }

    public function getDocTypeAttribute($value)
        {
            $value = DB::table('doctype')->where('code', $value)->value('name');
            return $value;
        }

    public function getAuthorTypeAttribute($value)
        {
            $value =  DB::table('auth_type_main')->where('kod', $value)->value('name');
            return $value;
        }

    public function topics()
        {
            return $this->belongsToMany(
                    'App\Topic',
                    'ref_doc',
                    'doc_id',
                    'card_id');
        }


}
