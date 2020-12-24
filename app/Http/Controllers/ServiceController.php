<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.service');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $service = new Service();
        $service->name = $request->name;
        $service->status = $request->status;
        $service->price = $request->price;
        $service->lowest_price = $request->lowest_price;
        $service->highest_price = $request->highest_price;
        $service->contents = $request->contents;
        $service->featured_image = $request->image;
        $service->technology_used = implode(',', $request->technology);
        $service->save();

        return redirect()->route('service.edit', $service->id);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit')->with('data', Service::find($service->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service = Service::find($service->id);
        $service->name = $request->name;
        $service->status = $request->status;
        $service->price = $request->price;
        $service->lowest_price = $request->lowest_price;
        $service->highest_price = $request->highest_price;
        $service->contents = $request->contents;
        $service->featured_image = $request->image;
        $service->technology_used = implode(',', $request->technology);
        $service->save();

        return response()->json(['data' => 'Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
