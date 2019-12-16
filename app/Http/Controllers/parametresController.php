<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class parametresController extends Controller
{
    public function getAllArticles(){
         /*$categories=DB::table('categories')
                    ->get();

        $listArticles=array();
        for ($i = 0; $i <= sizeof($categories); $i++)
           {    
                $categ= $categories[$i];
                $articles=categories::find($categ->id)->articles;
                $listArticles("cat"->$categ,"art"->$articles);
                            
            }*/
        $articles=DB::table('articles')
                    ->get();

            
        return view ('parametresArticles')->with('allArticles',$articles);
    }

    public function deleteArticle($id){
        $dlt=DB::table('articles')->where('id',$id)->delete();
        if($dlt){

           /* return back()
            ->with('success','Article Supprimer avec success!');*/
            $notif=array(
                'message'=>'Article Supprimer avec success!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notif);
        }else{
            echo "erreur";
        }
    }
}
