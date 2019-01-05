<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slides.index', ['slides' => Slide::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required|max:255',
            'img' => 'required|max:255',
            'date' => 'date|required'
        ]);
        Slide::create([
            'title' => request('title'),
            'img' => request('img'),
            'date' => \DateTime::createFromFormat('Y-m-d', request('date'))
        ]);
        return redirect('/admin/slides/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        return view('admin.slides.show', ['slide' => $slide]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        return view('admin.slides.edit', ['slide' => $slide]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        request()->validate([
            'title' => 'required|max:255',
            'img' => 'required|max:255',
            'date' => 'date|required'
        ]);
        $slide->update([
            'title' => request('title'),
            'img' => request('img'),
            'date' => \Carbon::createFromFormat('Y-m-d', request('date'))
        ]);
        return redirect('/admin/slides/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        $slide->delete();
        return redirect('/admin/slides/');
    }
}