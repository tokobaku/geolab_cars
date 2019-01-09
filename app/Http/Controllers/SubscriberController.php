<?php

namespace App\Http\Controllers;

use \App\Slide;
use \App\Service;
use Illuminate\Http\Request;
use App\Subscriber;

class SubscriberController extends Controller
{
    public function index () {
    	return view('admin.subscribers', ['subscribers' => Subscriber::all()]);
    }

    public function show_public () {
        return view('index', [
            'slides' => Slide::all(),
            'services' => Service::all()
        ]);
    }

    public function show_success () {

    }

    public function store (Request $request) {
    	request()->validate([
    		'name' => 'required|string|max:255',
    		'mail' => 'required|email|max:255'
    	]);
        try {
        	$result = Subscriber::create([
        		'name' => request('name'),
        		'mail' => request('mail')
        	]);
        } catch (\Illuminate\Database\QueryException $e) {
            if($e->errorInfo[1] == 1062) {
                $message = 'You are already a subscriber';
                return view('index', [
                    'message' => $message,
                    'slides' => Slide::all(),
                    'services' => Service::all()
                ]);
            }
        }
        $success = 'Success!';
    	return view('index', [
            'success' => $success,
            'slides' => Slide::all(),
            'services' => Service::all()
        ]);
    }
}