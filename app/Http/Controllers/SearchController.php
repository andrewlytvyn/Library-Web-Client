<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SearchController extends Controller
{
    public function index()
    {

        return view('searchform');
    }

    public function validator(array $data){
        return Validator::make($data,[
            'text' => ['required', 'string', 'min:3','max:255'],
            'where'=> ['required', Rule::in([
                'name',
                'author',
                'topic',
                'annotation',
                'keywords',
                ])]
        ]);
    }

    public function autocomplete(array $data){
        

    }
}
