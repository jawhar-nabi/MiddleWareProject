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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($slug)
    {   //dd(Auth()->user()->admin);
        $categories=DB::table('categories')
        /*->orderBy('nom', 'asc')
        ->limit($slug)*/
        ->get();
       // dd(date("Y-m-d H:i:s"));
            
        if(Count($categories) == 0){
            $data=array();
            $data['nom']='Hôtels';
            $data['created_at']=date("Y-m-d H:i:s");
            $data['updated_at']=date("Y-m-d H:i:s");
            DB::table('categories')->insert($data);

            $data['nom']='Immeubles';
            $data['created_at']=date("Y-m-d H:i:s");
            $data['updated_at']=date("Y-m-d H:i:s");
            DB::table('categories')->insert($data);
            
            $data['nom']='Voitures';
            $data['created_at']=date("Y-m-d H:i:s");
            $data['updated_at']=date("Y-m-d H:i:s");
            DB::table('categories')->insert($data);

            $data['nom']='Salles des fêtes/congrès';
            $data['created_at']=date("Y-m-d H:i:s");
            $data['updated_at']=date("Y-m-d H:i:s");
            DB::table('categories')->insert($data);

            $data['nom']='Salle de sport';
            $data['created_at']=date("Y-m-d H:i:s");
            $data['updated_at']=date("Y-m-d H:i:s");
            DB::table('categories')->insert($data);

            $categories=DB::table('categories')
            /*->orderBy('nom', 'asc')
            ->limit($slug)*/
            ->get();
            
        }


        if($slug=='6' || $slug=='9'){
            $articles=DB::table('articles')
            ->orderBy('id', 'desc')
            ->limit($slug)
            ->join('categories','categories.id','=','articles.categories_id')
            ->join('users','users.id','=','articles.users_id')
            ->select('categories.nom as nomC','users.nom as nomU','users.prenom as prenomU'/*,users.tel as tel*/,'articles.*')
            ->get();
        }elseif ($slug=='all' ){
            $articles=DB::table('articles')
            ->join('categories','categories.id','=','articles.categories_id')
            ->join('users','users.id','=','articles.users_id')
            ->select('categories.nom as nomC','users.nom as nomU','users.prenom as prenomU'/*,users.tel as tel*/,'articles.*')
            ->get();
        }else{
        
            $articles=DB::table('articles')
            ->join('categories','categories.id','=','articles.categories_id')
            ->where('categories.nom',$slug)
            ->join('users','users.id','=','articles.users_id')
            ->select('categories.nom as nomC','users.nom as nomU','users.prenom as prenomU'/*,users.tel as tel*/,'articles.*')
            ->get();
        }

       




        if($slug == 6){
        return view ('welcome')->with('a',$articles)->with('b',$categories);
        }else{
            return view ('articles')->with('a',$articles);

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
        $data['description']=$request->description;
        $data['emplacement']=$request->emplacement;
        $data['categories_id']=$request->input('categorie');
        $data['users_id']=Auth()->user()->id;
        $data['partager']=false;
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', ]);
       
           
            
    
            if($request->hasfile('image')){
                $file = $request->file('image');
                $filename = time().'.'.request()->image->getClientOriginalExtension();
                $file->move(public_path('pics'),$filename);
                $data['image'] = $filename;
            
            }else{
                $data['image'] = '';
            }

        // if($request->hasfile('image')){
        //     $file = $request->file('image');
           
        //     $filename =  time().'.'.$request->image->extension();  
        //     $file->move(public_path('images/articles'),$filename);
        //     $data['image'] = $filename;
        
        // }else{
        //     $data['image'] = '123';

       
        // }
        // $imageName = time().'.'.$request->image->extension();  
   
        // $request->image->move(public_path('images'), $imageName);
         

        $state= DB::table('articles')->insert($data);
        if($state){
        return back()
        ->with('success','You have successfully added an item.')
        ->with('image',1);


        }
    }

    
    public function searchArticle(request $request){
        $data=array();
        $data['nomA']=$request->nomA;
        $data['emplacement']=$request->emplacement;
        //$nomC='$request->input('nomC')';
        $nomC='h';
        if( $nomC=='tous'){
            $datC=['categories.nom','like','%%'];
           
        }else{
            $datC=['categories.nom','like','%h%'];
        }
        $state= DB::table('categories')->where($datC[0],$datC[1],$datC[2])->get();

        dd($state);
    }


}
