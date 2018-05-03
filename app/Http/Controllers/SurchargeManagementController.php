<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Surcharge;
use App\Traits\CaptureIpTrait;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use jeremykenedy\LaravelRoles\Models\Role;
use Validator;

class SurchargeManagementController extends Controller
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
        $surcharges = Surcharge::paginate(env('USER_LIST_PAGINATION_SIZE'));
       

        return View('surcharge.show-surcharges', compact('surcharges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('surcharge.create-surcharge');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name'                  => 'required|max:255',
                'code'                   => 'required|max:255|unique:surcharges',
               
				'description'                 => 'required',
				
            ],
            [
               
                'name.required'       => trans('auth.surchargeNameRequired'),
				 'code.unique'         => trans('auth.surchargeCodeTaken'),
                'code.required' => trans('auth.surchargeCodeRequired'),
                'description.required'  => trans('auth.surchargedescriptionRequired'),
				
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $ipAddress = new CaptureIpTrait();
       

        $surcharge = Surcharge::create([
            'name'             => $request->input('name'),
            'code'       => $request->input('code'),
            'description'        => $request->input('description'),
      
            'updated_ip_address' => $ipAddress->getClientIp(),
            'activated'        => 1,
        ]);

      
      
        $surcharge->save();

        return redirect('surcharges')->with('success', trans('surcharge.createSuccess'));
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
        $surcharge = Surcharge::find($id);

        return view('surcharge.show-surcharge')->withSurcharge($surcharge);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surcharge = Surcharge::findOrFail($id);
       

       

        $data = [
            'surcharge'        => $surcharge,
     
        ];

        return view('surcharge.edit-surcharge')->with($data);
    }

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
        $currentUser = Auth::user();
        $user = Surcharge::find($id);
		$ipAddress = new CaptureIpTrait();

 
            $validator = Validator::make($request->all(), [
                'name'     => 'required|max:255',
                'code' => 'required|min:3',
				'description'  => 'required|max:255',
            ]);
        

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user->name = $request->input('name');
        $user->code = $request->input('code');
        $user->description = $request->input('description');
		  

        $user->updated_ip_address = $ipAddress->getClientIp();

     

        $user->save();

        return back()->with('success', trans('surcharge.updateSuccess'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $currentUser = Auth::user();
        $user = Surcharge::findOrFail($id);
        $ipAddress = new CaptureIpTrait();

   
            $user->deleted_ip_address = $ipAddress->getClientIp();
            $user->save();
            $user->delete();

            return redirect('surcharges')->with('success', trans('surcharge.deleteSuccess'));
     

     
    }

    /**
     * Method to search the users.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $searchTerm = $request->input('surcharge_search_box');
        $searchRules = [
            'surcharge_search_box' => 'required|string|max:255',
        ];
        $searchMessages = [
            'surcharge_search_box.required' => 'Search term is required',
            'surcharge_search_box.string'   => 'Search term has invalid characters',
            'surcharge_search_box.max'      => 'Search term has too many characters - 255 allowed',
        ];

        $validator = Validator::make($request->all(), $searchRules, $searchMessages);

        if ($validator->fails()) {
            return response()->json([
                json_encode($validator),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $results = Surcharge::where('id', 'like', $searchTerm.'%')
                            ->orWhere('name', 'like', $searchTerm.'%')
                            ->orWhere('code', 'like', $searchTerm.'%')->get();

       

        return response()->json([
            json_encode($results),
        ], Response::HTTP_OK);
    }
}
