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
		$inputs = [
	            'keyword' => $request->input('keyword', ''),
	            'city' => $request->input('city', ''),
	            'date' => $request->input('date', ''),
	            'salary' => $request->input('salary', ''),
        ];
		$cities = $area->getCityNameModel();
        return view('home',compact('inputs','cities'));
    }



    public function searchJob(Request $request){
        $job = new Job();
        $inputs = [
            'keyword' => $request->keyword,
            'city' => $request->city,
            'salary' => $request->salary,
            'working_date' => $request->working_date,
        ];
        $viewMoreJob = $request->input('viewMoreJob', 0);
        $jobSearch = $job->getSearchModel($inputs)->offset($viewMoreJob*5)->limit(5)->get();
        return response()->json($jobSearch);
    }  

    public function getAmountJob(Request $request){
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
        return response()->json($amountJobs);
    }

    public function postJob(Request $request){
        if($request->ajax()){
            $job = new Job();
            $inputs = [
                'name' => $request->input('name', ''),
                'address' => $request->input('address', ''),
                'salary' => $request->input('salary', ''),
                'working_date' => $request->input('working_date', ''),
                'description' => $request->input('description', ''),
                'note' => $request->input('note', ''),
                'contact' => $request->input('contact', ''),
            ];
            $job->postJobModel($inputs);

        }
    }
 



// Khu vực test, có thể xóa
		
// end khu vuc test
   

}
