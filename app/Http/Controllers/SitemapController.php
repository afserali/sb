<?php

namespace App\Http\Controllers;
use Mail;
use App\Models\Profile;
use App\Models\Region;
use App\Models\Country;
use App\Models\City;
use App\Models\Port;
use App\Traits\CaptureIpTrait;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

use jeremykenedy\LaravelRoles\Models\Role;
use Validator;
use Yajra\Datatables\Facades\Datatables;
class SitemapController extends Controller
{
	

    public function index()
{
  $routes =  Route::getRoutes();
  $pdf ="ff.pdf";
 Mail::send('emails.email', [], function ($m) use($pdf) {
    $m->to('new.afser@gmail.com');
    $m->subject('Your whitepaper download');
    $m->attachData($pdf, 'filename.pdf');
});

  return response()->view('sitemap.index', [
      'routes' => $routes,
      
  ])->header('Content-Type', 'text/xml');
}
	
}
