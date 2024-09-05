<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HelloController extends Controller
{
    //

public function index()
{
    $name='afnan omar al-afif';
    $phonenumber='735022837';
    $email='fano.y9@gmail.com';
    $PhoneNumber='735022837';
    $nationality='yemeni-hadramout';
    $birth='14/5';
    return view('frontend.information',compact('name','phonenumber','email','PhoneNumber','nationality','birth'));
}
}