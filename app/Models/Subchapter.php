<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

class Subchapter extends Authenticatable
{
    use HasRoleAndPermission;
    use Notifiable;
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'commodity_subchapter';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
public function section() {
    return $this->belongsTo('sid', 'Section');
}
public function country() {
    return $this->belongsTo('cid', 'Chapter');
}
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
'sid',
'cid',
'subchapter',
'subchaptercode',
'addedby',
'updatedby',
      
       
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
