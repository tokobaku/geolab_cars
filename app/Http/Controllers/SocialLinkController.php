<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\SocialLink;

class SocialLinkController extends Controller
{
    public function index () {
    	return view('admin.links.index', ['links' => SocialLink::all()]);
    }

    public function edit ($id) {
    	return view('admin.links.edit', ['link' => SocialLink::findOrFail($id)]);
    }

    public function update (Request $request, $id) {
    	request()->validate([
            'link' => 'url|max:255'
        ]);
        $sl = SocialLink::findOrFail($id);
        if (Input::file('img') != null) {
            $sl->update([
                'img' => '/img/social_links/'.$id.'.'.$img->getClientOriginalExtension()
            ]);
            $img = Input::file('img');
            $img->move('img/social_links/', $id . '.' . $img->getClientOriginalExtension());
        }
        $sl->update([
            'link' => request('link')
        ]);
        return redirect('/admin/links/');
    }
}