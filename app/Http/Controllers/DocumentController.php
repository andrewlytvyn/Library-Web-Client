<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function show($id)
    {

        return view('book', ['document' => Document::findOrFail($id)]);
    }
}
