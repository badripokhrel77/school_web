<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
{
    $teamMembers = Team::all();

    return view('frontend.index', compact('teamMembers'));
}

public function home()
{
    
    $teamMembers = Team::all();

    return view('frontend.index', compact('teamMembers'));
}

    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function courses()
    {
        return view('frontend.courses');
    }
    public function team()
    {
        return view('frontend.team');
    }
    public function testimonial()
    {
        return view('frontend.testimonial');
    }


}
