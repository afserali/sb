<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Getquote;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Traits\GetActivationTrait;
use App\Traits\CaptureIpTrait;
use jeremykenedy\LaravelRoles\Models\Role;
use App\Notifications\SendGetquoteEmail;

class WelcomeController extends Controller
{
	

      use RegistersUsers;
	   use GetActivationTrait;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('index');
    }
	 public function getaquote(Request $request)
    {
		 $ipAddress = new CaptureIpTrait();
		  $role = Role::where('slug', '=', 'unverified')->first();
		 $validator = Validator::make($request->all(),
            [
               
				'name'                  => 'required|max:255|unique:users',
                'email'                  => 'required|email|max:255|unique:users',
             
            ],
            [
               
                'name.required'       => trans('auth.originNameRequired'),
				 'email.required'      => trans('auth.originNameRequired'),
               
            ]
        );

        if ($validator->fails()) {
			
            $user = Getquote::create([
                'contact_name'		=> $request->input('name'),
				'contact_no'  		=> $request->input('contact_number'),
				'countrycode' 		=> $request->input('countrycode'),
                'email'          	=> $request->input('email'),
				'orgin'				=> $request->input('origin'),
				'destination'		=> $request->input('destination'),
				'weight'			=> $request->input('tonnage'),
				'type_of_commodity'	=> $request->input('commodity'),
				'measurement_type'	=> $request->input('equipment'),
				'shipment_date'		=> date('Y-m-d H:i:s'),
				'user_type'			=> 1,
              
              
              
            ]);
			$token="";
$user->notify(new SendGetquoteEmail($token));
       
       

        return redirect('index')->with('success', trans('mastermanagement.createSuccess'));
        }else{
			$user1 = Getquote::create([
                'contact_name'		=> $request->input('name'),
				'contact_no'  		=> $request->input('contact_number'),
				'countrycode' 		=> $request->input('countrycode'),
                'email'          	=> $request->input('email'),
				'orgin'				=> $request->input('origin'),
				'destination'		=> $request->input('destination'),
				'weight'			=> $request->input('tonnage'),
				'type_of_commodity'	=> $request->input('commodity'),
				'measurement_type'	=> $request->input('equipment'),
				'shipment_date'		=> date('Y-m-d H:i:s'),
				'user_type'			=> 0,
				]);
   $user = User::create([
                'name'              => $request->input('name'),
				'mobile'  			=> $request->input('contact_number'),
				'countrycode' 		=> $request->input('countrycode'),
                'email'          	=> $request->input('email'),
                'password'          => Hash::make("123456"),
                'token'             => str_random(64),
                'signup_ip_address' => $ipAddress->getClientIp(),
                'activated'         => !config('settings.activation'),
            ]);

        $user->attachRole($role);
        $this->initiateEmailActivation($user);

        return redirect('index')->with('success','Thanks for the Get A Quote. Our Service
Agent will get back to you soon');
		}
    
	}
}
