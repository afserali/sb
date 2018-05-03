<?php

namespace App\Http\Controllers;

use App\Models\Getquote;
use App\Traits\CaptureIpTrait;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use jeremykenedy\LaravelRoles\Models\Role;
use Validator;
use Yajra\Datatables\Facades\Datatables;
class GetaQuoteViewController extends Controller
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
    public function index()
    {
		 $getquotes = Getquote::orderBy('created_at', 'DESC')->get();
		
		
		
		

			
			return view('getquote.show-all')
			 ->with('getquotes', $getquotes);
       
    }
	
	
	
	public function destroy($id)
    {
       
        $port = Getquote::findOrFail($id);
        $ipAddress = new CaptureIpTrait();

      
           
            $port->save();
            $port->delete();

            return redirect('getquotes')->with('success', trans('getquote.deleteSuccess'));
       
    }
    /**
     * Method to search the regions.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $searchTerm = $request->input('region_search_box');
        $searchRules = [
            'region_search_box' => 'required|string|max:255',
        ];
        $searchMessages = [
            'region_search_box.required' => 'Search term is required',
            'region_search_box.string'   => 'Search term has invalid characters',
            'region_search_box.max'      => 'Search term has too many characters - 255 allowed',
        ];

        $validator = Validator::make($request->all(), $searchRules, $searchMessages);

        if ($validator->fails()) {
            return response()->json([
                json_encode($validator),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $results = Region::where('id', 'like', $searchTerm.'%')
                            ->orWhere('name', 'like', $searchTerm.'%')->get();

        

        return response()->json([
            json_encode($results),
        ], Response::HTTP_OK);
    }
	
	public function autocomplete(Request $request){
	$term = $request->input('region_search_box');
	
	$results = array();
	
	$queries = PORT::where('port', 'LIKE', '%'.$term.'%')
		->orWhere('portcode', 'LIKE', '%'.$term.'%')
		->take(5)->get();
	
	foreach ($queries as $query)
	{
	    $results[] = [ 'id' => $query->id, 'value' => $query->port.' '.$query->portcode ];
	}
return Response::json(json_encode($results));
}
	
}
