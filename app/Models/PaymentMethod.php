<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class PaymentMethod
 * @package App\Models
 * @version January 12, 2025, 10:51 am UTC
 *
 * @property string $name
 * @property integer $branch_id
 * @property string $payment_number
 */
class PaymentMethod extends Model
{

    public $table = 'paymentmethods';
    



    public $fillable = [
        'name',
        'branch_id',
        'payment_number'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'branch_id' => 'integer',
        'payment_number' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'branch_id' => 'required',
        'payment_number' => 'required'
    ];

    
}
