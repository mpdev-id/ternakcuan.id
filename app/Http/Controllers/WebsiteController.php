<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
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
            'webconfig' => \App\Models\WebConfig::first(),
            'benefits' =>\App\Models\Benefit::all(),
        ]);
 }
 public function dropship(){
        return view('homepage.dropship',[
            'dropship' => \App\Models\Dropship::first(),
            'about' => \App\Models\About::first(),
            'partners' => \App\Models\Partner::all(),
            'testimonies' => \App\Models\Testimony::all(),
            'services' => \App\Models\Service::all(),
            'quotes' => \App\Models\Quote::all(),
            'copywriting' => \App\Models\CopyWriting::first(),
            'seo'=> \App\Models\Seo::first(),
            'webconfig' => \App\Models\WebConfig::first(),
            'benefits' =>\App\Models\Benefit::all(),
        ]);
 }

    public function filterdata(Request $request){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: OPTIONS, GET, POST");
            $data = Cabang::where('location',$request->cabang)
           ->first();

            return response()->json($data);
        }

}
