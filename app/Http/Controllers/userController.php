<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userform;
class userController extends Controller
{
    public function formIndex(){
        return view('user.form');
    }

    function form(Request $req){
        //validate data
        $req->validate([
            'name'=> 'required',
            'email'=> 'required',
            'phoneno'=> 'required',
            'qualification'=> 'required',
            'state'=> 'required',
            'resume'=> 'required'
        ]);
         
        // uploade file
        $file = time() . '.' . $req['resume']->getClientOriginalExtension();

        $userform= new Userform;
        $userform->name=$req->name;
        $userform->email=$req->email;
        $userform->phoneno=$req->phoneno;
        $userform->qualification=$req->qualification;
        $userform->state=$req->state;
        $userform->resume= $file;
        $userform->save();
        $req['resume']->move(base_path() . '/storage/app/public',$file);
        return redirect('/')->with('success','successfully apply');
    }

    public function applicantView(){
        $userforms=Userform::all();
        return view('company.applicant',compact('userforms'));

    }


    function dashboard(){
        return view('user.userdash');
    }


    
}

