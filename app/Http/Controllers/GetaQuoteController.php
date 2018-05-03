<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class GetaQuoteController extends Controller
{

    public function getaquote(Request $request){
        $query = $request->get('term','');
        $ports=\DB::table('ports');
        if($request->type=='origin'){
            $ports->where('port','LIKE','%'.$query.'%');
        }
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
