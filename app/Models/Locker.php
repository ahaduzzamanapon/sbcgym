<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Locker
 * @package App\Models
 * @version January 9, 2025, 5:11 am UTC
 *
 * @property string $locker_number
 * @property string $location
 * @property string $status
 */
class Locker extends Model
{

    public $table = 'lockers';
    



    public $fillable = [
        'locker_number',
        'location',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'locker_number' => 'string',
        'location' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
