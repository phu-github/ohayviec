<?php

namespace App\Http\Components;


use Illuminate\Support\Facades\DB;


use App\Area;   
use App\Job;
class UtilComponent 	
{
 	public function getValueOfCheckBox ($request){
 		$detailMode = $request->input('detailmode', '');
 		return $detailMode;
 	}

}