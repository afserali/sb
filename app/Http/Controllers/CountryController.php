<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Region;
use App\Models\Country;
use App\Models\AllPorts;
use App\Traits\CaptureIpTrait;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use jeremykenedy\LaravelRoles\Models\Role;
use Validator;

class CountryController extends Controller
{
    //
	
	public function store(Request $request)
    {
		
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

        return redirect('master')->with('success', trans('mastermanagement.createRegionSuccess'));
    }
 public function storecountry(Request $request)
    {
		
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

        return redirect('master')->with('success', trans('mastermanagement.createRegionSuccess'));
    }
}
