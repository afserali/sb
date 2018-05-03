<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Sections;
use App\Models\Chapter;
use App\Models\Subchapter;
use App\Models\Commodity;
use App\Traits\CaptureIpTrait;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use jeremykenedy\LaravelRoles\Models\Role;
use Validator;

class CommodityManagementController extends Controller
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
		 $sections = Sections::all();
		 $chapters = Chapter::all();
		  $subchapters = Subchapter::all();
		   $commodities = Commodity::all();
		
		
		

			
			return view('commodity.show-all')
			 ->with('commodities', $commodities)
			  ->with('subchapters', $subchapters)
            ->with('chapters', $chapters)
            ->with('sections', $sections);
       
    }
	
	
	 public function showsubchapter()
    {
		 $sections = Sections::all();
		 $chapters = Chapter::all();
		  $subchapters = Subchapter::all();
		  
		
		
		

			
			return view('commodity.show-subchapter')
			 
			  ->with('subchapters', $subchapters)
            ->with('chapters', $chapters)
            ->with('sections',  $sections);
       
    }
 public function showchapter()
    {
		 $sections = Sections::all();
		 $chapters = Chapter::all();
		
		  
		
		
		

			
			return view('commodity.show-chapter')
			 
			
            ->with('chapters', $chapters)
            ->with('sections',  $sections);
       
    }
	 public function showsection()
    {
		 $sections = Sections::all();
		 $codes = Chapter::all();
		  $cities = Subchapter::all();
		  
		
		
		

			
			return view('commodity.show-section')
			 
			  ->with('cities', $cities)
            ->with('codes', $codes)
            ->with('sections',  $sections);
       
    }
    /**
	 return View('commodity.show-all', compact('codes'));
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
    public function storesection(Request $request)
    {
		
	
			
        $validator = Validator::make($request->all(),
            [
                'sectionname'                  => 'required|max:255',
				 'sectionid'                  => 'required|max:255|unique:commodity_sections',
             
            ],
            [
               
                'sectionname.required'       => trans('auth.sectionNameRequired'),
				'sectionid.unique'         => trans('auth.sectionIDTaken'),
                'sectionid.required'       => trans('auth.sectionIDRequired'),
               
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        
      
 $currentUser = Auth::user()->name;

        $section = Sections::create([
		 'sectionID'             => $request->input('sectionid'),
            'sectionName'             => $request->input('sectionname'),
			'addedby' 		   => $currentUser,
			'updatedby'        => $currentUser,
           
        ]);

        $section->save();

        return redirect('commodity')->with('success', trans('commodity.createSectionsSuccess'));
		
    }
	/**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
	
 public function storechapter(Request $request)
    {
		
        $validator = Validator::make($request->all(),
            [
			 	'section'                  => 'required',
                 'chapter'                    => 'required|max:255',
				 'code'                    => 'required|max:255',
             
            ],
            [
               
                'chapter.required'       => trans('auth.chapterNameRequired'),
			
                'code.required'       => trans('auth.chaptercodeNameRequired'),
               
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        
      
 $currentUser = Auth::user()->name;

        $chapter = Chapter::create([
		    'sid'             => $request->input('section'),
			
            'chapter'          => $request->input('chapter'),
			'code'             => $request->input('code'),
			'addedby' 		   => $currentUser,
			'updatedby'        => $currentUser,
           
        ]);

        $chapter->save();

        return redirect('commodity')->with('success', trans('commodity.createSectionsSuccess'));
    }
	/**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
	
	public function storesub(Request $request)
    {
		
        $validator = Validator::make($request->all(),
            [
			 	'section'                  => 'required',
				'chapter'                  => 'required',
                 'subchapter'                    => 'required|max:255',
				  'subchaptercode'                    => 'required|max:255',
				 
             
            ],
            [
              
                'subchapter.required'       => trans('auth.subchapterRequired'),
				 'subchaptercode.required'       => trans('auth.subchaptercodeRequired'),
				
               
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        
      
 $currentUser = Auth::user()->name;

        $city = Subchapter::create([
		    'sid'             => $request->input('section'),
			 'cid'             => $request->input('chapter'),
            'subchapter'          => $request->input('subchapter'),
			 'subchaptercode'          => $request->input('subchaptercode'),
			'addedby' 		   => $currentUser,
			'updatedby'        => $currentUser,
           
        ]);

        $city->save();

        return redirect('commodity')->with('success', trans('commodity.createSectionsSuccess'));
    }
	
	/**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
	public function storecommodities(Request $request)
    {
		
        $validator = Validator::make($request->all(),
            [
			 	'section'                  => 'required',
                 'chapter'                    => 'required',
				 'subchapter'                    => 'required',
				 'commodity'                    => 'required|max:255',
                 'commoditycode'                    => 'required|max:255',
             
            ],
            [
               
                'commodity.required'       => trans('auth.commodityNameRequired'),
				
                'commoditycode.required'       => trans('auth.commoditycodeNameRequired'),
               
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        
      
 $currentUser = Auth::user()->name;

        $country = Commodity::create([
		    'sid'             => $request->input('section'),
			
            'cid'          => $request->input('chapter'),
			'chapterid'          => $request->input('subchapter'),
			'commodity'             => $request->input('commodity'),
			'commoditycode'             => $request->input('commoditycode'),
			'addedby' 		   => $currentUser,
			'updatedby'        => $currentUser,
           
        ]);

        $country->save();

        return redirect('commodity')->with('success', trans('commodity.createSectionsSuccess'));
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
        $region = Sections::find($id);
		
		if ($request2 =='createsection'){
			return view('commodity.create-sections')->withSections($region);
		}else if ($request2 =='createchapter'){
			
			   	$sections = Sections::all();
$select = [];
foreach($sections as $section){
    $select[$section->id] = $section->sectionName;
}
return view('commodity.create-chapter', compact('select'));
			
			
		}else if ($request2 =='createsubchapter'){
			
			   	$sections = Sections::all();
$select = [];
foreach($sections as $section){
    $select[$section->id] = $section->sectionName;
}
	$chapters = Chapter::all();
$chapterselect = [];
foreach($chapters as $chapter){
    $chapterselect[$chapter->id] = $chapter->chapter;
}


return view('commodity.create-subchapter', compact('select','chapterselect'));
			
			
		}else if ($request2 =='commodities'){
			
			   	$sections = Sections::all();
$select = [];
foreach($sections as $section){
    $select[$section->id] = $section->sectionName;
}
	$chapters = Chapter::all();
$chapterselect = [];
foreach($chapters as $chapter){
    $chapterselect[$chapter->id] = $chapter->chapter." / ". $chapter->code;
}
$subchapters = Subchapter::all();
$subchapterselect = [];
foreach($subchapters as $subchapter){
    $subchapterselect[$subchapter->id] = $subchapter->subchapter;
}
return view('commodity.create-commodities', compact('select','chapterselect','subchapterselect'));
			
			
		}
		
else if ($request2 =='showsection'){
			
	
return view('commodity.show-section');
			
			
		}
		else if ($request2 =='showchapter'){
			
	
return view('commodity.show-chapter');
			
			
		}else if ($request2 =='showsubchapter'){
			
	 	$departments = Sections::all();
$select = [];
foreach($departments as $department){
    $select[$department->id] = $department->name;
}
	$countrys = Chapter::all();
$countryselect = [];
foreach($countrys as $country){
    $countryselect[$country->id] = $country->country." / " .$country->code;
}

return view('commodity.show-subchapter', compact('select','countryselect'));
			
			
		}
		else if ($request2 =='editregion'){
			
	
return view('commodity.edit-region');
			
			
		}
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function editsection($id)
    {
        $section = Sections::findOrFail($id);
        
$sectionName=$section->sectionName;
      

        $data = [
            'sectionName'        => $sectionName,
			  'section'        => $section
           
           
        ];

        return view('commodity.edit-section')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function updatesection(Request $request, $id)
    {
        $currentSections = Auth::user();
        $section = Sections::find($id);
       
        $ipAddress = new CaptureIpTrait();

       
            $validator = Validator::make($request->all(), [
                'sectionName'     => 'required|max:255',
				'sectionID'     => 'required|max:255',
               
                
            ]);
       

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $section->sectionName = $request->input('sectionName');
		 $section->sectionID = $request->input('sectionID');
        
        $section->save();

        return back()->with('success', trans('commodity.updateSuccess'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function deletesection($id)
    {
        
        $section = Sections::findOrFail($id);
        $ipAddress = new CaptureIpTrait();

        
            $section->deleted_ip_address = $ipAddress->getClientIp();
            $section->save();
            $section->delete();

            return redirect('showsection')->with('success', trans('commodity.deleteSuccess'));

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

        $results = Sections::where('id', 'like', $searchTerm.'%')
                            ->orWhere('name', 'like', $searchTerm.'%')->get();

        // Attach roles to results
        foreach ($results as $result) {
            $roles = [
                'roles' => $result->roles,
            ];
            $result->push($roles);
        }

        return response()->json([
            json_encode($results),
        ], Response::HTTP_OK);
    }
}
