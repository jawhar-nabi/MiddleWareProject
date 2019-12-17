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
            ->join('categories','categories.id','=','articles.categories_id')
            ->join('users','users.id','=','articles.users_id')
                
                ->select('categories.nom as nomc','users.nom as nomU','users.prenom as prenomU','articles.*')->get();

        /*$articles=DB::table('articles')
                    ->get();*/

            
        return view ('parametresArticles')->with('allArticles',$articles);
    }

    public function deleteArticle($id){
        $dlt=DB::table('articles')->where('id',$id)->delete();
        if($dlt){

            return back()
            ->with('success','Article Supprimer avec success!');
           
        }else{
            return back()
            ->with('error','Erreur');
        }
    }
    public function accepterArticle($id){

        
      
        $result=DB::table('articles')->where('id', $id)->update(array('partager'=>true));
        if($result){

             return back()
             ->with('success','Article Accepter avec success!');
            
         }else{
            return back()
            ->with('error','Article déja Accepter!');
         }
        

    }

    public function ignorerArticle($id){


        $result=DB::table('articles')->where('id', $id)->update(array('partager'=>false));
        if($result){

            return back()
             ->with('success','Article Ignorer avec success!');
             
         }else{
            return back()
            ->with('error','Article déja Ignorer!');
         }

    }
    public function ajouterCategories(request $request){

            
            $data=array();
            $data['nom']=$request->nom;
            $state= DB::table('categories')->insert($data);
            if($state){
            return back()
            ->with('success','Categorie ajouté avec success.');

            }else{
                return back()
                ->with('error','AErreur');
            }
        
       
    }
    public function getAllCategories(){
        $categories=DB::table('categories')
        ->get();
       
        return view('parametresCategories')->with('allCategories',$categories);
      
    }
}
