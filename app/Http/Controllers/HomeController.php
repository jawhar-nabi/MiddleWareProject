<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
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
        Carbon::setLocale('fr');


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
            ->where('partager', true)
            ->orderBy('id', 'desc')
            ->limit($slug)
            ->join('categories','categories.id','=','articles.categories_id')
            ->join('users','users.id','=','articles.users_id')
            ->select('categories.nom as nomC','users.nom as nomU','users.prenom as prenomU'/*,users.tel as tel*/,'articles.*')
            ->paginate($slug) ;
            
           // dd(Carbon::parse($articles[0]->created_at)->diffForHumans());
        }elseif ($slug=='all' ){
            $articles=DB::table('articles')
            ->where('partager', true)
            ->orderBy('id', 'desc')
            ->join('categories','categories.id','=','articles.categories_id')
            ->join('users','users.id','=','articles.users_id')
            ->select('categories.nom as nomC','users.nom as nomU','users.prenom as prenomU'/*,users.tel as tel*/,'articles.*')
            ->paginate(9) ;
        }else{
        
            $articles=DB::table('articles')
            ->join('categories','categories.id','=','articles.categories_id')
            ->where('categories.nom',$slug)
            ->where('partager', true)
            ->orderBy('id', 'desc')
            ->join('users','users.id','=','articles.users_id')
            ->select('categories.nom as nomC','users.nom as nomU','users.prenom as prenomU'/*,users.tel as tel*/,'articles.*')
            ->paginate(9) ;
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
        $data['num']=$request->num;
        $data['users_id']=Auth()->user()->id;
        $data['partager']=false;
        $data['created_at']=Carbon::now()->toDateTimeString();
        $data['updated_at']=Carbon::now()->toDateTimeString();
        
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
        $data['nomC']=$request->input('nomC');
        
        if( $data['nomC']=='tous'){
            //$datC=['categories.nom','like','%%'];
            $datC=['categories.id','>',0];
           
        }else{
            //$datC=['categories.nom','like','%'.$data['nomC'].'%'];
            $datC=['categories.id','=',$data['nomC']];
        }
        if($data['nomA']==null) {
            $datA=['articles.nom','like','%%'];
        }else{
            $datA=['articles.nom','like','%'.$data['nomA'].'%'];
        }
        if($data['emplacement']==null) {
            $datEm=['articles.emplacement','like','%%'];
         }else{
            $datEm=['articles.emplacement','like','%'.$data['emplacement'].'%'];
         }
        $articles= DB::table('articles')->where($datA[0],$datA[1],$datA[2])
                                ->where($datEm[0],$datEm[1],$datEm[2])
                                ->where('partager', true)
                                ->join('categories','categories.id','=','articles.categories_id')
                                ->where($datC[0],$datC[1],$datC[2])
                                ->join('users','users.id','=','articles.users_id')
                                ->select('categories.nom as nomC','users.nom as nomU','users.prenom as prenomU'/*,users.tel as tel*/,'articles.*')
                                ->paginate(9)    ;              
                                             
        
                                    
                                    
                                     
        //$state= DB::table('categories')->where('categories.nom','like','%'.$nomC.'%')->get();
        //$state=DB::select('select * from categories where nom like "%h%"');
        return view ('articles')->with('a',$articles);
    }


}
