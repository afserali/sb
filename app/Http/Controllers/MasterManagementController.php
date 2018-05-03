<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Region;
use App\Models\Country;
use App\Models\City;
use App\Models\Port;
use App\Traits\CaptureIpTrait;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use jeremykenedy\LaravelRoles\Models\Role;
use Validator;

use Yajra\Datatables\Datatables;
class MasterManagementController extends Controller
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
		 $regions = Region::all();
		 $codes = Country::all();
		  $cities = City::all();
		   $ports = Port::orderBy('id', 'ASC')->get();
		
		
		

			
			return view('mastermanagement.show-all')
			 ->with('ports', $ports)
			  ->with('cities', $cities)
            ->with('codes', $codes)
            ->with('regions',  $regions);
       
    }
	public function getdata()
    {
     $ports = \DB::table('ports')
            ->join('region', 'ports.rid', '=', 'region.id')
			->join('country', 'ports.cid', '=', 'country.id')
			->join('cities', 'ports.cityid', '=', 'cities.id')
           ->select('ports.id','ports.port','ports.portcode','region.name','country.country','country.code','cities.city','ports.created_at')
            ->get();
     return Datatables::of($ports)->make(true);
    }
	
	 public function showcity()
    {
		 $regions = Region::all();
		 $codes = Country::all();
		  $cities = City::orderBy('id', 'ASC')->get();
		  
		
		
		

			
			return view('mastermanagement.show-city')
			 
			  ->with('cities', $cities)
            ->with('codes', $codes)
            ->with('regions',  $regions);
       
    }
 public function showcountry()
    {
		 $regions = Region::all();
		 $codes = Country::orderBy('id', 'ASC')->get();
		  $cities = City::all();
		  
		
		
		

			
			return view('mastermanagement.show-country')
			 
			  ->with('cities', $cities)
            ->with('codes', $codes)
            ->with('regions',  $regions);
       
    }
	 public function showregion()
    {
		 $regions = Region::all();
		 $codes = Country::all();
		  $cities = City::all();
		  
		
		
		

			
			return view('mastermanagement.show-region')
			 
			  ->with('cities', $cities)
            ->with('codes', $codes)
            ->with('regions',  $regions);
       
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
	
 public function storecountry(Request $request)
    {
		
        $validator = Validator::make($request->all(),
            [
			 	'region'                  => 'required',
                 'country'                    => 'required|max:255|unique:country',
				 'code'                    => 'required|max:255|unique:country',
             
            ],
            [
                'country.unique'         => trans('auth.countryNameTaken'),
                'country.required'       => trans('auth.countryNameRequired'),
				'code.unique'         => trans('auth.countrycodeNameTaken'),
                'code.required'       => trans('auth.countrycodeNameRequired'),
               
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        
      
 $currentUser = Auth::user()->name;

        $country = Country::create([
		    'rid'             => $request->input('region'),
			
            'country'          => $request->input('country'),
			'code'             => $request->input('code'),
			'currency'          => $request->input('currency'),
			'currencyFull'             => $request->input('currencyFull'),
			'time_zone'          => $request->input('time_zone'),
			'timeUTC'             => $request->input('timeUTC'),
			'addedby' 		   => $currentUser,
			'updatedby'        => $currentUser,
           
        ]);

        $country->save();

        return redirect('showcountry')->with('success', trans('mastermanagement.createRegionSuccess'));
    }
	/**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
	
	public function storecity(Request $request)
    {
		
        $validator = Validator::make($request->all(),
            [
			 	'region'                  => 'required',
				'country'                  => 'required',
                 'city'                    => 'required|max:255',
				 
             
            ],
            [
                'city.unique'         => trans('auth.cityNameTaken'),
                'city.required'       => trans('auth.cityNameRequired'),
				
               
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        
      
 $currentUser = Auth::user()->name;

        $city = City::create([
		    'rid'             => $request->input('region'),
			 'cid'             => $request->input('country'),
            'city'          => $request->input('city'),
			'addedby' 		   => $currentUser,
			'updatedby'        => $currentUser,
           
        ]);

        $city->save();

        return redirect('showcity')->with('success', trans('mastermanagement.createRegionSuccess'));
    }
	
	/**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
	public function storeport(Request $request)
    {
		
        $validator = Validator::make($request->all(),
            [
			 	'region'                  => 'required',
                 'country'                    => 'required',
				 'city'                    => 'required',
				 'port'                    => 'required|max:255|unique:ports',
                 'portcode'                    => 'required|max:255|unique:ports',
             
            ],
            [
                'port.unique'         => trans('auth.portNameTaken'),
                'port.required'       => trans('auth.portNameRequired'),
				'portcode.unique'         => trans('auth.portcodeNameTaken'),
                'portcode.required'       => trans('auth.portcodeNameRequired'),
               
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        
      
 $currentUser = Auth::user()->name;

        $country = Port::create([
		    'rid'             => $request->input('region'),
			
            'cid'          => $request->input('country'),
			'cityid'          => $request->input('city'),
			'port'             => $request->input('port'),
			'portcode'             => $request->input('portcode'),
			'addedby' 		   => $currentUser,
			'updatedby'        => $currentUser,
           
        ]);

        $country->save();

        return redirect('master')->with('success', trans('mastermanagement.createRegionSuccess'));
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$request2 = \Request::segment(2);
        $region = Region::find($id);
		
		if ($request2 =='createregion'){
			return view('mastermanagement.create-region')->withRegion($region);
		}else if ($request2 =='createcountry'){
			
			   	$departments = Region::all();
$select = [];
foreach($departments as $department){
    $select[$department->id] = $department->name;
}
return view('mastermanagement.create-country', compact('select'));
			
			
		}else if ($request2 =='createcity'){
			
			   	$departments = Region::all();
$select = [];
foreach($departments as $department){
    $select[$department->id] = $department->name;
}
	$countrys = Country::all();
$countryselect = [];
foreach($countrys as $country){
    $countryselect[$country->id] = $country->country." / " .$country->code;
}


return view('mastermanagement.create-city', compact('select','countryselect'));
			
			
		}else if ($request2 =='createport'){
			
			   	$departments = Region::all();
$select = [];
foreach($departments as $department){
    $select[$department->id] = $department->name;
}
	$countrys = Country::all();
$countryselect = [];
foreach($countrys as $country){
    $countryselect[$country->id] = $country->country." / ". $country->code;
}
$cities = City::all();
$cityselect = [];
foreach($cities as $city){
    $cityselect[$city->id] = $city->city;
}
return view('mastermanagement.create-port', compact('select','countryselect','cityselect'));
			
			
		}
		
else if ($request2 =='showregion'){
			
	
return view('mastermanagement.show-region');
			
			
		}
		else if ($request2 =='showcountry'){
			
	
return view('mastermanagement.show-country');
			
			
		}else if ($request2 =='showcity'){
			
	 	$departments = Region::all();
$select = [];
foreach($departments as $department){
    $select[$department->id] = $department->name;
}
	$countrys = Country::all();
$countryselect = [];
foreach($countrys as $country){
    $countryselect[$country->id] = $country->country." / " .$country->code;
}

return view('mastermanagement.show-city', compact('select','countryselect'));
			
			
		}
		
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function editregion($id)
    {
        $region = Region::findOrFail($id);
        

         $data = [
            'region'        => $region,
          
        ];

        return view('mastermanagement.edit-region')->with($data);
    }
	
	public function editcountry($id)
    {
        $country = Country::findOrFail($id);
         $region = Region::all();

       

         $data = [
            'country'        => $country,
			'region'       => $region,
            
          
        ];

        return view('mastermanagement.edit-country')->with($data);
    }

public function editcity($id)
    {
        $city = City::findOrFail($id);
         $region = Region::all();
		  $country = Country::all();

       

         $data = [
		 'city'        => $city,
            'country'        => $country,
			'region'       => $region,
            
          
        ];

        return view('mastermanagement.edit-city')->with($data);
    }
	
	public function editport($id)
    {
		 $port = Port::findOrFail($id);
        $city = City::all();
         $region = Region::all();
		  $country = Country::all();

       

         $data = [
		  'port'        => $port,
		 'city'        => $city,
            'country'        => $country,
			'region'       => $region,
            
          
        ];

        return view('mastermanagement.edit-port')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function updateregion(Request $request, $id)
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
	
	
	 public function updatecountry(Request $request, $id)
    {
        $currentRegion = Auth::user();
        $country = Country::find($id);
       
        $ipAddress = new CaptureIpTrait();

            $validator = Validator::make($request->all(), [
                'country'     => 'required|max:255',
               
            ]);
        

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
		$country->updatedby       = $currentRegion->name;
        $country->country = $request->input('country');
		  $country->rid = $request->input('region');
		    $country->code = $request->input('code');
			  $country->currency = $request->input('currency');
			    $country->currencyFull = $request->input('currencyFull');
				  $country->time_zone = $request->input('time_zone');
				    $country->timeUTC = $request->input('timeUTC');
					
        
        $country->save();

        return back()->with('success', trans('mastermanagement.updateSuccess'));
    }
	
	
	 public function updatecity(Request $request, $id)
    {
        $currentRegion = Auth::user();
        $city = City::find($id);
       
        $ipAddress = new CaptureIpTrait();

            $validator = Validator::make($request->all(), [
                'city'     => 'required|max:255',
               
            ]);
        

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
		$city->updatedby       = $currentRegion->name;
        $city->cid = $request->input('country');
		  $city->rid = $request->input('region');
		    $city->city = $request->input('city');
			  
					
        
        $city->save();

        return back()->with('success', trans('mastermanagement.updateSuccess'));
    }
public function updateport(Request $request, $id)
    {
        $currentRegion = Auth::user();
        $port = Port::find($id);
       
        $ipAddress = new CaptureIpTrait();

            $validator = Validator::make($request->all(), [
                'port'     => 'required|max:255',
               
            ]);
        

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
		$port->updatedby       = $currentRegion->name;
        $port->cid = $request->input('country');
		  $port->rid = $request->input('region');
		    $port->cityid = $request->input('city');
			    $port->port = $request->input('port');
				$port->portcode = $request->input('portcode');
					
        
        $port->save();

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
