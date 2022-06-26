<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function service()
    {
        return view("web.service.index");
    }


}
