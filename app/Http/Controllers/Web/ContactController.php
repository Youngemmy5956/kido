<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Services\Notifications\AppMailerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function contact()
    {
        return view("web.contact.index");
    }

    
}
