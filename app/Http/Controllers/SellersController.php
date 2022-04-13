<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Seller;

class SellersController extends Controller
{
    function list()
    {
           echo "phone list";
            //return Seller::all();
            //$data=Seller::all();
            //$apple = DB::table('smartphones')->where('brand', 'Apple')->get();
           // $data1=Seller::where('brand','Motorola')->get();
            //$data2=Seller::where('brand','Samsung')->get();

            $data1 = DB::table('sellers')->where('brand', 'Samsung')->get();
            $data2 = DB::table('sellers')->where('brand', 'Motorola')->get();

//return view('sell', ['mobile1' => $apple], ['mobile2' =>$samsung],
//['mobile3' =>$mi],['mobile4' =>$others],['user'=>$user]);
           return view('sellerview',['data1'=>$data1],['data2'=>$data2]);
    }
}
