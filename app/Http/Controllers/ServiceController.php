<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.services.index', ['services' => Service::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'title' => 'required|string|max:255',
            'file' => 'required|mimes:svg'
        ]);
        $img = Input::file('file');
        $name = microtime(true) . '.' . $img->getClientOriginalExtension();
        $img->move('img/services/', $name);
        Service::create([
            'title' => request('title'),
            'img' => 'img/services/' . $name
        ]);
        return redirect('/admin/services/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.services.show', ['service' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        request()->validate([
            'title' => 'required|max:255'
        ]);
        $img = Input::file('file');
        if ($img != null) {
            request()->validate([
                'file' => 'mimes:svg'
            ]);
            $img->move('img/services/', $service->img);
        }
        $service->update([
            'title' => request('title'),
        ]);
        return redirect('/admin/services/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        unlink(public_path() . '/' . $service->img);
        $service->delete();
        return redirect('/admin/services/');
    }
}
