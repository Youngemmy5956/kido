<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;

    protected $table = 'approval';

    protected $fillable = ['user_id','amount','path'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function wallet(){
        return $this->hasOne(Wallet::class);
    }
}
