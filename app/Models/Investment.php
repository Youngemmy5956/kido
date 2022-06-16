<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    
    protected $table = 'investments';

    protected $fillable = ['user_id','date','amount','roi','duration','created_at','expire_at'];

    public $timestamps = false;
}
