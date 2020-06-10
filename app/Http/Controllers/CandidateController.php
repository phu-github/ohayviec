<?php

namespace App\Http\Controllers;

use App\Http\Components\UtilComponent;
use Illuminate\Http\Request;
use App\Candidate;
use App\Area;

class CandidateController extends Controller
{
    public function getAmountCandidate(Request $request){
    	$cadidate = new Candidate();
        $inputs = [
            'addressCan' => $request->input('addressCan', ''),
            'dateCan' => $request->input('dateCan', ''),
            'genderCan' => $request->input('genderCan', ''),
            'oldCan' => $request->input('oldCan', ''),
        ];
		$amountCadidate = $cadidate->getCandidateModal($inputs)->count();
    	return response()->json($amountCadidate);
    }

    public function searchCandidate(Request $request){
            $area =new Area();
            $cadidate = new Candidate();
            $utilComponent = new UtilComponent();
            $inputs = [
                    'addressCan' => $request->input('addressCan', ''),
                    'dateCan' => $request->input('dateCan', ''),
                    'genderCan' => $request->input('genderCan', ''),
                    'oldCan' => $request->input('oldCan', ''),
                    
            ];
            $viewMoreCandidate = $request->input('viewMoreCandidate', 0);
            $cities = $area->getCityNameModel();
            $canditateSearch = $cadidate->getCandidateModal($inputs)->offset($viewMoreCandidate*10)->limit(10)->get(); 
            return response()->json($canditateSearch);
    }

    public function postProfile(Request $request){
        if($request->ajax()){
            $candidates = new Candidate();
            $inputs = [
                'name' => $request->input('name', ''),
                'address' => $request->input('address', ''),
                'old' => $request->input('old', ''),
                'gender' => $request->input('gender', ''),
                'picture' => $request->input('picture', ''),
             	'free_time' => $request->input('free_time', ''),
                'experiences' => $request->input('experiences', ''),
                'contact' => $request->input('contact', ''),
            ];
            $candidates->postProfileModel($inputs);
        }
    }



}
