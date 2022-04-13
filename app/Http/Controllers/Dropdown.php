<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Dropdown extends Controller
{
    function index()
    {
     $seller_list = DB::table('sellers')
         ->groupBy('brand')
         ->get();
     return view('dropdownview')->with('seller_list', $seller_list);
    }

    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('sellers')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
}
?>