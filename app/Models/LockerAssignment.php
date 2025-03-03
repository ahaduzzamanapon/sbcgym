<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class LockerAssignment
 * @package App\Models
 * @version January 9, 2025, 5:20 am UTC
 *
 * @property integer $locker_id
 * @property integer $member_id
 * @property string $start_date
 * @property string $end_date
 * @property string $status
 */
class LockerAssignment extends Model
{

    public $table = 'lockerassignments';
    


    protected $guarded = ['id'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'id' => 'integer',
    //     'locker_id' => 'integer',
    //     'member_id' => 'integer',
    //     'start_date' => 'date',
    //     'end_date' => 'date',
    //     'status' => 'string'
    // ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
