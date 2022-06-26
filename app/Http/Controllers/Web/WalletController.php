<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    //
    public function wallet()
    {
        return view("web.wallet.index");
    }


}
