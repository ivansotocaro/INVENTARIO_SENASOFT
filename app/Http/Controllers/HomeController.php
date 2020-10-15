<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){   
           
            $query = trim($request->get('search'));
           
            
            $users_count =  DB::table('users as us')                  
            ->join('role_user', 'role_user.user_id', '=', 'us.id' )                
            ->join('roles','roles.id', '=',  'role_user.role_id')                                              
            ->select('us.*','roles.name as rol')            
            ->count();

            $users_count1 =  DB::table('users')
            ->select('id', 'name', 'email', 'avatar')
            ->whereNotIn('id', DB::table('role_user')
            ->join('users', 'users.id', '=' , 'role_user.user_id')
            ->where('role_id','>=',[1, 2, 3, 4, 5])
            ->pluck('users.id')->toArray())
            ->count();
            

            $users =  DB::table('users as us')                  
                ->join('role_user', 'role_user.user_id', '=', 'us.id' )                
                ->join('roles','roles.id', '=',  'role_user.role_id')                                              
                ->select('us.*','roles.name as rol')
                ->where('us.name', 'LIKE', '%'.$query. '%')
                ->orwhere('us.email', 'LIKE', '%'.$query. '%')
                ->orwhere('roles.name', 'LIKE', '%'.$query. '%')                
                ->orderBy('id', 'asc')                
                ->paginate(10);
          
           
            $query1 = trim($request->get('search1'));  

           $users1 = DB::table('users as usr')
               ->select('usr.*')
               ->whereNotIn('id', DB::table('role_user')
               ->join('users', 'users.id', '=' , 'role_user.user_id')
               ->where('role_id','>=',[1, 2, 3, 4, 5])
               ->pluck('users.id')->toArray())
               ->where('usr.name', 'LIKE', '%'.$query1. '%')                                                              
               ->orderBy('id', 'asc') 
               ->paginate(10); 
               
               

            
            return view('home', compact('users','users1', 'query', 'query1', 'users_count','users_count1'));
          
            
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    
}
