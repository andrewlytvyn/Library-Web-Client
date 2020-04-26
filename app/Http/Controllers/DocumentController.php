<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    public function index(Request $request)
    {
        $documents = Document::where("name","LIKE","%{$request->input('docname_fld')}%")->paginate(20);
        return view('booklist', ['documents' => $documents]);
    }

    public function show($id)
    {
        $document = Document::findOrFail($id);
        $document->doc_type = DB::table('doctype')->where('code', $document->doc_type)->value('name');
        $document->author_type = DB::table('auth_type_main')->where('kod', $document->author_type)->value('name');
        return view('book', ['document' => $document]);
    }
}
