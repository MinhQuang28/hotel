<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Hotel;
use DB;
 
class AutoCompleteController extends Controller
{
 
  
    public function search(Request $request)
    {
          $search = $request->get('term');
        
      $result = DB::table('city_hotel')->where('city','LIKE', '%'. $request->get('term'). '%' )
      ->get();
          // $result = User::where('name', 'LIKE', '%'. $search. '%')

          return response()->json($result);
            
    } 
}