<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //
     public function index()
    {
        return view('services.index', ['services' => Service::all()]);
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        foreach (["price","category"] as $field) {
            if (empty($data[$field])) $data[$field] = null;
        }
        Service::create($data);
        return redirect()->route('services.index');
    }

    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->all();
        foreach (["price","category"] as $field) {
            if (empty($data[$field])) $data[$field] = null;
        }
        $service->update($data);
        return redirect()->route('services.index');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index');
    }
}
