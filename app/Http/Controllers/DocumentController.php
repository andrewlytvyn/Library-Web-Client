<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    public function index(Request $request)
    {
        $documents = Document::where([
            ["name","LIKE","%{$request->input('docname_fld')}%"],
            ['status','<>','R'],
        ])->paginate(20);

        return view('booklist', ['documents' => $documents]);
    }

    public function show($id)
    {
        return view('book', ['document' => Document::findOrFail($id)]);
    }
}
