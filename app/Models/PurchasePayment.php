<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasePayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'purchase_purchase_id',
        'payment_mode',
        'payment_date',
        'payment_amount',
        'payment_note',
        'payment_doc',
        'payment_number',
        'payment_status'
    ];
}
