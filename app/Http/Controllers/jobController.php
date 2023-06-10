<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class jobController extends Controller
{
    function Index(){
        return view('company.Form');
    }
    function formStore(Request $req){
        $job= new Job;
        $job->name=$req->name;
        $job->Employment_type=$req->Employment_type;
        $job->profile=$req->profile;
        $job->closing_date=$req->closing_date;
        $job->eligibility=$req->eligibility;
        $job->loction=$req->loction;
        $job->job_description=$req->job_description;
        $job->salary=$req->salary;
        $job->description=$req->description;
        $job->benefits=$req->benefits;
        $job->save();
        return redirect('/postjob');
    }

    public function jobView(){
        $jobs=Job::all();
        return view('company.jobs',compact('jobs'));

    }

    function viewIndex(){
        return view('user.viewjob');
    }
}
