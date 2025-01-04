<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Notice;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
{
    $messages= Message::all();
    $teamMembers = Team::all();
    $latestNotices = Notice::latest()->take(5)->get();

    return view('frontend.index', compact('teamMembers', 'latestNotices','messages'));
}

public function home()
{
    $messages= Message::all();
    $teamMembers = Team::all();
    $latestNotices = Notice::latest()->take(5)->get();

    return view('frontend.index', compact('teamMembers', 'latestNotices','messages'));
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
        $teamMembers = Team::all();
        return view('frontend.team', compact('teamMembers'));
    }
    public function testimonial()
    {
        return view('frontend.testimonial');
    }
    // public function notice()
    // {
    //     $notices = Notice::latest()->get(); // Fetch notices ordered by the latest published date
    //     return view('frontend.notice.index', compact('notices'));
    // }

}
