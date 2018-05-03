<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

class Ratesurcharge extends Authenticatable
{
    use HasRoleAndPermission;
    use Notifiable;
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rate_surcharge';

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
    protected $fillable = [

'masterid',
'ULI',
'ULICurrency',
'CCI',
'CCICurrency',
'CSI',
'CSICurrency',
'DSI',
'DSICurrency',
'EMI',
'EMICurrency',
'FTI',
'FTICurrency',
'GTI',
'GTICurrency',
'IFS',
'IFSCurrency',
'IMP',
'IMPCurrency',
'PHI',
'PHICurrency',
'PAI',
'PAICurrency',
'PSI',
'PSICurrency',
'DPA',
'DPACurrency',
'CFD',
'CFDCurrency',
'DCG',
'DCGCurrency',
'FDH',
'FDHCurrency',
'DDF',
'DDFCurrency',
'DHC',
'DHCCurrency',
'AGS',
'AGSCurrency',
'BSC',
'BSCCurrency',
'CAF',
'CAFCurrency',
'CDR',
'CDRCurrency',
'DDC',
'DDCCurrency',
'IMS',
'IMSCurrency',
'PAN',
'PANCurrency',
'SUZ',
'SUZCurrency',
'IHI',
'IHICurrency',
'PAE',
'PAECurrency',

      
       
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
