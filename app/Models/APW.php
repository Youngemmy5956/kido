<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class APW extends Model
{
    use HasFactory;

    protected $table = "apw";

    protected $fillable = ["user_id","amount"];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
