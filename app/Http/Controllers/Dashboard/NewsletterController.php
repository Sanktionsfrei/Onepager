<?php


namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Newsletter;

class NewsletterController extends Controller
{
    public function index()
    {
        $subscribers = Newsletter::paginate(10);

        return view('dashboard.newsletter.index', ['subscribers' => $subscribers]);
    }
}