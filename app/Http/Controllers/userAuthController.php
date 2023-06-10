<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userauth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;


class userAuthController extends Controller
{
    function regIndex(){
        return view('user.register');
    }

    function userRegis(Request $req){
        $req->validate([
            'name'=> 'required',
            'email'=> 'required',
            'mobileno'=> 'required',
            'qualification'=> 'required',
            'passingyear'=> 'required',
            'universityname'=> 'required',
            'result'=> 'required',
            'password'=> 'required'
        ]);

        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $data['mobileno'] = $req->mobileno;
        $data['qualification'] = $req->qualification;
        $data['passingyear'] = $req->passingyear;
        $data['universityname'] = $req->universityname;
        $data['result'] = $req->result;
        $data['password'] = Hash::make($req->password);
        

        $userauth = Userauth::create($data);
        if(!$userauth){
            return redirect(route('userreg'))->with("error", "registration failed");
        }
        else{
            return redirect('userlog')->with("success", "registered!!");
        }

    }


    function logIndex(){
        return view('user.login');
    }

    function userLogin(Request $req){
        $req->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);

        $userauth = Userauth::where('email', '=', $req->email)->first();
        if($userauth){
            if(Hash::check($req->password,$userauth->password)){
                $req->session()->put('loginId', $userauth->id);
                return redirect('/profile')->with("success", "loged in");
            }
            else{
                return back()->with('error', 'password not matches');
            }
        }
        else{
            return back()->with('error', 'this email is not registered');
        }
    }


    function userlogout(){
        Session::flush();
        Auth::logout();
        return redirect('userlogout');
    }


    
    //profile
    public function table(){
        $data=Userauth::all();
        return view("user.profile",["update"=>$data]);
    }
    public function delete($id){
        $data=Userauth::find($id);
        $data->delete();
        return redirect('profile');
    }
    
    public function update($id){
        $data=Userauth::find($id);
        return view("user.updateform",["newdata"=>$data]);
    }

    public function edit(Request $req){
            $userauth=Userauth::find($req->id);
            $userauth=new Userauth();
            $userauth->name = $req->name;
            $userauth->email = $req->email;
            $userauth->mobileno = $req->mobileno;
            $userauth->qualification = $req->qualification;
            $userauth->passingyear = $req->passingyear;
            $userauth->universityname = $req->universityname;
            $userauth->result = $req->result;
            $userauth->password =Crypt::encrypt($req->input('password'));
            
            $userauth->save();
            return redirect('profile');
        }
        // public function edit(Request $req){
        //     $mem=Student::find($req->id);
        //     $mem->Name=$req->Name;
        //     $mem->mobile=$req->mobile;
            
        //     $mem->save();
        //     return redirect("form");
        // }
    
    }


