<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SocialLink;

class SocialLinkController extends Controller
{
    public function index () {
    	return view('admin.links.index', ['links' => SocialLink::all()]);
    }

    public function edit ($id) {
    	return view('admin.links.edit', ['link' => SocialLink::find($id)]);
    }

    public function update (Request $request, $id) {
    	request()->validate([
            'link' => 'required|max:255',
            'name' => 'required|max:255',
            'img' => 'required|max:255'
        ]);
        SocialLink::find($id)->update([
            'link' => request('link'),
            'name' => request('name'),
            'img' => 'img'
        ]);
        return redirect('/admin/links/');
    }
}