<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AjaxAutocompleteController extends Controller
{
    public function index(){        
        return view('autocomplete');
    }
    public function searchResponse(Request $request){
        $query = $request->get('term');
		
        $ports=\DB::table('ports');
        
            $ports->where('port','LIKE','%'.$query.'%');
       
       $ports=$ports->get();  
	     
	   
        $data=array();
        foreach ($ports as $port) {
                $data[]=array('port'=>$port->port." - ".$port->portcode,'id'=>$port->id);
        }
        if(count($data))
             return $data;
        else
            return ['port'=>'','id'=>''];
    }
}