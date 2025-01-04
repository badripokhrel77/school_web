<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticesectionController extends Controller
{
    public function index()
    {
        $notices = Notice::latest()->get(); // Fetch notices ordered by the latest published date
        return view('frontend.notice.index', compact('notices'));
    }


    public function view($id)
    {
        $notice = Notice::findOrFail($id);
        return view('frontend.notice.view', compact('notice'));
    }
}
