<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    
    protected $table = 'investments';

    protected $fillable = ['user_id','date','amount','plan','roi','duration'];

    public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
