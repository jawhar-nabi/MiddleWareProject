<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class parametresController extends Controller
{
    public function getAllArticles(){
        /*$categories=DB::table('categories')
                    ->get();
        */
        $articles=DB::table('articles')
                    ->get();

            
        return view ('parametresArticles')->with('allArticles',$articles);
    }
}
