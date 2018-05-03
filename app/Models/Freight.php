<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

class Freight extends Authenticatable
{
    use HasRoleAndPermission;
    use Notifiable;
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rate_freight';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 	 public function rates()
{
    return $this->belongsTo('App\Models\Rates');
}
    protected $fillable = [

'masterid',
'BAS',
'BASCurrency',
'ERS',
'ERSCurrency',
'FRO',
'FROCurrency',
'LSS',
'LSSCurrency',
'PSS',
'PSSCurrency',
'SBF',
'SBFCurrency',
'SOC',
'SOCCurrency',
'WSC',
'WSCCurrency',	
      
       
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

       
    ];

    protected $dates = [
          'created_at',
        'updated_at',
		'deleted_at',
    ];

    /**
     * Build Social Relationships.
     *
     * @var array
     */
	
   
}
