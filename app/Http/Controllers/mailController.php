<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MonMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class mailController extends Controller
{
    //

    public function mail(){


        Mail::to('debson@gooogle.com')->send(new MonMail());
    }
}
