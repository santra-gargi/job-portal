<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companyauth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class companyAuthController extends Controller
{
    public function registerIndex(){
        return view('companyauth.register');
    }
    public function registration(Request $req){
        
        $req->validate([
            'name'=> 'required',
            'companyname'=> 'required',
            'email'=> 'required|unique:companyauths|email',
            'phoneno'=> 'required',
            'password'=> 'required'
        ]);

        $data['name'] = $req->name;
        $data['companyname'] = $req->companyname;
        $data['email'] = $req->email;
        $data['phoneno'] = $req->phoneno;
        $data['password'] = Hash::make($req->password);

        $companyauth = Companyauth::create($data);
        if(!$companyauth){
            return redirect(route('register'))->with("error", "registration failed");
        }
        else{
            return redirect('login')->with("success", "registered!!");
        }
        
    }


    public function loginIndex(){
        return view('companyauth.login');
    }

    function comLogin(Request $req){
        $req->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);

        $companyauth = Companyauth::where('email', '=', $req->email)->first();
        if($companyauth){
            if(Hash::check($req->password,$companyauth->password)){
                $req->session()->put('loginId', $companyauth->id);
                return redirect('postjob')->with("success", "loged in");
            }
            else{
                return back()->with('error', 'password not matches');
            }
        }
        else{
            return back()->with('error', 'this email is not registered');
        }
    }


    function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    // public function conIndex(){
    //     $hr_name= Auth::Companyauth()->name;
    //     return view::make('company.applicant',['name'=>$hr_name]);
    // }


}
