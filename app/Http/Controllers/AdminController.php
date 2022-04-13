<?php

namespace App\Http\Controllers;
use App\Models\Seller;
use App\Models\Sdetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {  
        $users = DB::select('select * from sdetails');
return view('admin1',['users'=>$users]);
        
        
    }


    
} 
        
        
        
      /*  $list = DB::table('sellers')->where('brand', 'Samsung')->get();
//$list=Sdetail::all();
        echo"list";
       // return view('admin');
    return view('/admin',['list'=>$list]);
    }
}