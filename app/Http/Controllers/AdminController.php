<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $service_count = \App\Service::all()->count();
        $subscriber_count = \App\Subscriber::all()->count();
        return view('admin.index', [
            'service_count' => $service_count,
            'subscriber_count' => $subscriber_count
        ]);
    }
}