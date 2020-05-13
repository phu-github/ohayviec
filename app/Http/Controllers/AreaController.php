<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;

class AreaController extends Controller
{
     public function getCityName(){
     	$area =new Area();
    	$cities =$area->AreagetCityNameModel();
    	return view('pages.trangchu',compact('cities'));
    }
}
