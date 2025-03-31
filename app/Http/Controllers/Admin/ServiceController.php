<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\CreateServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(5);
        return view('admin.services.index', compact('services'));
    }
    public function create()
    {
        return view('admin.services.create');
    }
    public function store(CreateServiceRequest $request)
    {
        $data = $request->validated();
        Service::create($data);

        return to_route('services.index')->with('success', 'خدمات جدید ایجاد شد.');
    }
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        $service->update($data);

        return to_route('services.index')->with('success', 'خدمات به روز رسانی شد.');
    }
    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('success', 'خدمات با موفقیت حذف شد.');
    }
}
