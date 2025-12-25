<?php

namespace App\Http\Controllers;

use App\Models\HeaderCarousel;
use App\Models\Testimony;
use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
         $headerCarousels = HeaderCarousel::orderBy('id','desc')->get();
         $works = Work::orderBy('id','asc')->get();
         $testimonies = Testimony::orderBy('id','desc')->get();
        return view('users.welcome',compact('headerCarousels', 'works', 'testimonies'));
    }


}
