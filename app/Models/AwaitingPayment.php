<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwaitingPayment extends Model
{
    use HasFactory;

    protected $table = 'awaiting_payments';

    protected $fillable = ['user_id','amount','status','transaction_date'];
}
