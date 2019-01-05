<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscriberController extends Controller
{
    public function index () {
    	return view('admin.subscribers', ['subscribers' => Subscriber::all()]);
    }

    public function store (Request $request) {
    	request()->validate([
    		'name' => 'required|string|max:255|unique:subscribers',
    		'mail' => 'required|email|max:255'
    	]);
    	Subscriber::create([
    		'name' => request('name'),
    		'mail' => request('mail')
    	]);
    	return redirect('/');
    }
}