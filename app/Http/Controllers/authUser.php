<?php

namespace App\Http\Controllers;

use App\Models\patient;
use App\Models\User;
use Illuminate\Http\Request;

class authUser extends Controller
{
    //
    public function auth(Request $req)
    {
        $validated = $req->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        $users = User::all();
        foreach ($users as $user) {
            if ($user['email'] == $req->email && $user['password'] == $req->password) {
                session()->put('doctor', $req->email);
                return redirect('/doctor');
            }
        }
        return redirect('/login/')->with('status','invalid login credentials');
    }

    public function logedin()
    {
       $patient = patient::orderBy('id','DESC')->get();
        return view('doctor.dashboard', compact('patient'));
       
    }
    public function logout()
    {
        session()->pull('doctor');
        return redirect('/login');
    }

    public function register(Request $req)
    {
        $patient = new patient();
        $patient->fname = $req->fname;
        $patient->lname = $req->lname;
        $patient->gender = $req->gender;
        $patient->email = $req->email;
        $patient->dob = $req->date;
        $patient->ms = $req->status;
        $patient->nid = $req->NID;
        $patient->phone = $req->tel;
        $patient->save();
        return redirect('/doctor')->with('status', 'Successfully registered');
    }
}
