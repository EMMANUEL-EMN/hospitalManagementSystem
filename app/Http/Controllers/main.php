<?php

namespace App\Http\Controllers;

use App\Models\advert;
use App\Models\content;
use App\Models\msg;
use Illuminate\Http\Request;

class main extends Controller
{
    //
    public function index()
    {
        $content = content::where('page', 'home')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('welcome', compact('content', 'advert') );
    }
    public function about()
    {
        $content = content::where('page', 'about')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.about', compact('content', 'advert') );
    }
    public function services()
    {
        $content = content::where('page', 'services')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.services', compact('content', 'advert') );
    }

    public function why()
    {
        $content = content::where('page', 'why')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.why', compact('content', 'advert') );
    }

    public function login()
    {
        $content = content::where('page', 'login')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.login', compact('content', 'advert') );
    }
    public function contact()
    {
        $content = content::where('page', 'contact')->orderBy('id','ASC')->get();
        $advert  =  advert::orderBy('id', 'DESC')->get();
        return view('main.contact', compact('content', 'advert') );
    }
    public function contactReg(Request $req)
    {
        $contact = new msg();
        $contact->fname = $req->name;
        $contact->email = $req->email;
        $contact->msg = $req->msg;
        $contact->save();
        return redirect('/contact_us/')->with('status','successful sent');
    }
}
