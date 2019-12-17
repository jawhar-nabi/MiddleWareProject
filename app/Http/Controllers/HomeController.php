<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($slug)
    {   
        $categories=DB::table('categories')
        ->orderBy('nom', 'asc')
        ->limit($slug)
        ->get();


        if(Count($categories) == 0){
            $data=array();
            $data['nom']='Hôtels';
            DB::table('categories')->insert($data);
            $data['nom']='Immeubles';

            DB::table('categories')->insert($data);
            $data['nom']='Voitures';

            DB::table('categories')->insert($data);
            $data['nom']='Salles des fêtes/congrès';

            DB::table('categories')->insert($data);
            $data['nom']='Camping';

            DB::table('categories')->insert($data);
            $categories=DB::table('categories')
            ->orderBy('nom', 'asc')
            ->limit($pm)
            ->get();
        }
        if($slug == 6){
        return view ('welcome')->with('a',$categories);
        }else{
            return view ('articles')->with('a',$categories);

        }
    }

    public function getAllcategories()
    {   
        $categories=DB::table('categories')
        ->orderBy('nom', 'asc')
        ->get();
        return view('ajoutArticle')->with('b',$categories);

    }
    public function insertarticle(request $request){
       // dd($request->input('categorie'));
        $data=array();
        $data['nom']=$request->nom;
        $data['prix']=$request->prix;
        $data['description']="";
        $data['emplacement']=$request->emplacement;
        $data['categories_id']=$request->input('categorie');
        $data['users_id']="1";
        $data['images_id']="1";
        $data['partager']=false;

        $state= DB::table('articles')->insert($data);
        if($state){
        return back()
        ->with('success','You have successfully added an item.');

        }
    }
}
