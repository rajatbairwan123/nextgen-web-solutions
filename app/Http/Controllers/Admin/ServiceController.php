<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        Service::create($request->all());

        return redirect('/admin/services')->with('success','Service Added');
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        Service::find($id)->update($request->all());

        return redirect('/admin/services')->with('success','Service Updated');
    }

    public function delete($id)
    {
        Service::find($id)->delete();

        return back()->with('success','Service Deleted');
    }

}