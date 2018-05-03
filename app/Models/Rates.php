<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

class Rates extends Authenticatable
{
    use HasRoleAndPermission;
    use Notifiable;
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rate_master';

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
	 public function freights()
{
    return $this->hasMany('App\Models\Freight');
}

    protected $fillable = [

'OrginPort',
	'DestinationPort',
	'OrginPortName',
	'DestinationPortName',
	'EquipmentType',
	'ServiceOrigin',
	'ServiceDestination',
	'CommodityId',
	'CommodityName',
	'Route',
	'Remarks',
	'Days',
	'Effective',
	'Expiry',
	'SurgchareExpiry',
	'EntryType',
	'updated_ip_address',
	'deleted_ip_address',
	'userId',
	'createdBy',
	'updatedBy',
	'deletedBy',
	'status',
      
       
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
