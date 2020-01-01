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
            ->orderBy('id', 'desc')
                ->select('categories.nom as nomc','users.nom as nomU','users.prenom as prenomU','articles.*')
                ->paginate(10);

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
        ->paginate(10);
       
        return view('parametresCategories')->with('allCategories',$categories);
      
    }
    public function designerAdmin(){

        $users=array();
        $admins=DB::table('users')->where('admin', true)->paginate(2);
        return view('designerAdmin')->with('allUsers',$users)
                                    ->with('allAdmins',$admins);
    }

    public function searchUsers(request $request){
        
        $data=array();
        $data['nom']=$request->nom;
        $data['prenom']=$request->prenom;

        if( $data['nom']!=null){

            if( $data['prenom']!=null){
               
                $users=DB::table('users')
                    ->where('nom', $data['nom'])
                     ->where('prenom', $data['prenom'])
                     ->get();

            }else{
                $users=DB::table('users')
                ->where('nom', $data['nom'])->get();
            }
        }else{
            if( $data['prenom']!=null){
               
                $users=DB::table('users')
                     ->where('prenom', $data['prenom'])
                        ->get();

            }else{
                $users=DB::table('users')->get();
            }
        }

       
        return view('designerAdmin')->with('allUsers',$users);
    }
    

    
    public function deleteUser($id){
        $dlt=DB::table('users')->where('id',$id)->delete();
        if($dlt){

            return back()
            ->with('success','User Supprimé avec success!');
           
        }else{
            return back()
            ->with('error','Erreur');
        }
    }
    public function changerRole($id){


        
        //$result=0;
        $newRole=null;
        $admin=DB::table('users')->select('admin as admin')->where('id', $id)->get();
        //dd( $admin[0]->admin);
        if($admin[0]->admin==1){
            $result=DB::table('users')->where('id', $id) ->update(array('admin'=>false));
            return back()
            ->with('error',"User est n'est plus Admin!");

        }
        else{
     
            $result=DB::table('users')->where('id', $id) ->update(array('admin'=>true));
            return back()
            ->with('success','User est Admin');

        }




       

    }


}
