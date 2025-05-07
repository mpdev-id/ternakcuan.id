<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

 public function index(){
        return view('homepage.index',[
            'about' => \App\Models\About::first(),
            'partners' => \App\Models\Partner::all(),
            'testimonies' => \App\Models\Testimony::all(),
            'services' => \App\Models\Service::all(),
            'quotes' => \App\Models\Quote::all(),
            'copywriting' => \App\Models\CopyWriting::first(),
            'seo'=> \App\Models\Seo::first(),
            'webconfig' => \App\Models\WebConfig::first()
        ]);
 }
}
