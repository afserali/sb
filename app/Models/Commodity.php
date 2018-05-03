<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

class Commodity extends Authenticatable
{
    use HasRoleAndPermission;
    use Notifiable;
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'commodities';

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
public function city() {
    return $this->belongsTo('chapterid', 'Subchapter');
}
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
'sid',
'cid',
'chapterid',
'commodity',
'commoditycode',
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
