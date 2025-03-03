<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DietChartRequest
 * @package App\Models
 * @version February 25, 2025, 8:29 am UTC
 *
 * @property string $member
 * @property string $note
 */
class DietChartRequest extends Model
{

    public $table = 'diet_chart_requests';
    



    public $fillable = [
        'member',
        'note',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member' => 'string',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'member' => 'Required'
    ];

    
}
