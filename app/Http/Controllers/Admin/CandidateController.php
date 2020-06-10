<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Candidate;

class CandidateController extends Controller
{
    public function view(){
    	$candidate   = new Candidate();
    	$candidateData = $candidate->getCandidateModal(null)->paginate(7); 
    	return view('admin.candidate',compact('candidateData'));
    }
    public function edit(){
    	return view('');
    }
    public function delete(){
		return view('');
    }
}
