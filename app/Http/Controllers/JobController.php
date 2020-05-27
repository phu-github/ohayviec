<?php

namespace App\Http\Controllers;

use App\Http\Components\UtilComponent;
use Illuminate\Http\Request;
use App\Area;
use App\Job;

		

class JobController extends Controller
{
    public function getSearch(Request $request){
        $area = new Area();
        $job = new Job();
		$inputs = [
	            'keyword' => $request->input('keyword', ''),
	            'city' => $request->input('city', ''),
	            'date' => $request->input('date', ''),
	            'salary' => $request->input('salary', ''),
        ];
		$cities = $area->getCityNameModel();
        $amountJobs =$job->getSearchModel($inputs)->count();
        return view('home',compact('inputs','cities','amountJobs'));
    }

 	public function fetchJsonFindJob(Request $request){
     	if($request->ajax()){
     	 	$job = new Job();
     	 	$inputs = [
	            'keyword' => $request->input('keyword', ''),
	            'city' => $request->input('city', ''),
	            'date' => $request->input('date', ''),
	            'salary' => $request->input('salary', ''),
        	];
            $viewMoreJob = $request->input('viewMoreJob', 0);
 	 		$jobSearch = $job->getSearchModel($inputs)->offset($viewMoreJob*2)->limit(2)->get();
    		return response()->json($jobSearch);
    	}
    }
    

// Khu vực test, có thể xóa
		
// end khu vuc test
   

}
