<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Region;

use App\Models\Country;
use App\Models\City;
use App\Models\Port;
use App\Models\Rates;
use App\Models\Freight;
use App\Models\Ratesurcharge;
use App\Models\Origincharges;
use App\Traits\CaptureIpTrait;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use jeremykenedy\LaravelRoles\Models\Role;
use Validator;
use Yajra\Datatables\Facades\Datatables;
class RateManagementController extends Controller
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
				 $rates = Rates::orderBy('created_at', 'ASC')->get();
				$freights=Freight::all();
		
		
		
		

			
		
return view('ratemanagement.show-all')
->with('freights', $freights)
			  ->with('rates', $rates);
			  
       
    }
	
	
	
    /**
	 return View('mastermanagement.show-all', compact('codes'));
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		$request2 = \Request::segment(2);
		if($request2 =='createregion'){
			
        $validator = Validator::make($request->all(),
            [
                'name'                  => 'required|max:255|unique:region',
             
            ],
            [
                'name.unique'         => trans('auth.regionNameTaken'),
                'name.required'       => trans('auth.regionNameRequired'),
               
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        
      
 $currentUser = Auth::user()->name;

        $region = Region::create([
            'name'             => $request->input('name'),
			'addedby' 		   => $currentUser,
			'updatedby'        => $currentUser,
           
        ]);

        $region->save();

        return redirect('showregion')->with('success', trans('mastermanagement.createRegionSuccess'));
		}
    }
	/**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
	
 
    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
	  public function edit($id)
    {
        $rate = Rates::findOrFail($id);
       

       

        $data = [
            'rate'        => $rate,
     
        ];

        return view('ratemanagement.edit-rate')->with($data);
    }
    public function show($id)
    {
		 $surcharge = Rates::find($id);

        return view('ratemanagement.show-rate')->withSurcharge($surcharge);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $currentRegion = Auth::user();
        $region = Region::find($id);
       
        $ipAddress = new CaptureIpTrait();

            $validator = Validator::make($request->all(), [
                'name'     => 'required|max:255',
               
            ]);
        

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
		$region->updatedby       = $currentRegion->name;
        $region->name = $request->input('name');
        
        $region->save();

        return back()->with('success', trans('mastermanagement.updateSuccess'));
    }
	
	
	
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteregion($id)
    {
       
        $region = Region::findOrFail($id);
        $ipAddress = new CaptureIpTrait();

      
            $region->deleted_ip_address = $ipAddress->getClientIp();
            $region->save();
            $region->delete();

            return redirect('showregion')->with('success', trans('mastermanagement.deleteSuccess'));
       
    }
  public function deletecountry($id)
    {
       
        $country = Country::findOrFail($id);
        $ipAddress = new CaptureIpTrait();

      
           
            $country->save();
            $country->delete();

            return redirect('showcountry')->with('success', trans('mastermanagement.deleteSuccess'));
       
    }
 public function deletecity($id)
    {
       
        $city = City::findOrFail($id);
        $ipAddress = new CaptureIpTrait();

      
           
            $city->save();
            $city->delete();

            return redirect('showcity')->with('success', trans('mastermanagement.deleteSuccess'));
       
    }
	
	public function destroy($id)
    {
       
        $port = Port::findOrFail($id);
        $ipAddress = new CaptureIpTrait();

      
           
            $port->save();
            $port->delete();

            return redirect('master')->with('success', trans('mastermanagement.deleteSuccess'));
       
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
