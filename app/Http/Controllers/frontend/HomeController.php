<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function services()
    {
        return view('frontend.services');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function businessconsultancy()
    {
        return view('frontend.business-consultancy');
    }
    public function itsolution()
    {
        return view('frontend.it-solution');
    }
    public function marketingsolution()
    {
        return view('frontend.marketing-solution');
    }
    public function blog()
    {
        return view('frontend.blog');
    }


    public function effectivesocialmedia()
    {
        return view('frontend.effective-social-media-marketing-tips');
    }
    public function exploringthefutureofAI()
    {
        return view('frontend.exploring-the-future-of-AI');
    }
    public function simplifyingwebcmsappdevelopment()
    {
        return view('frontend.simplifying-web-cms,app-development');
    }


    public function cookiepolicy()
    {
        return view('frontend.cookiepolicy');
    }
    public function securitypolicy()
    {
        return view('frontend.securitypolicy');
    }
    public function privacypolicy()
    {
        return view('frontend.privacypolicy');
    }


}
