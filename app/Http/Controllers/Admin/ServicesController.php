<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Services\ServiceService;
use App\Models\Services;

class ServicesController extends Controller
{
    protected $serviceService;

    public function __construct(ServiceService $serviceService)
    {
        $this->serviceService = $serviceService;
    }

    public function index()
    {
        $services = $this->serviceService->getAllServices();
        return view('admin.services.list', ['services' => $services]);
    }

    public function create()
    {
        return view('admin.services.add');
    }
    public function store(ServiceRequest $request)
    {
        $this->serviceService->createService($request->validated());
        return redirect()->route('admin.admin.services.index')->with('success', 'Service added successfully.');
    }

    public function edit($id)
    {
        $service = $this->serviceService->findServiceById($id);
        return view('admin.services.edit', ['service' => $service]);
    }

    public function update(ServiceRequest $request, $id)
    {
        $this->serviceService->updateService($id, $request->validated());
        return redirect()->route('admin.admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $this->serviceService->deleteService($id);
        return redirect()->route('admin.admin.services.index')->with('success', 'Service deleted successfully.');
    }
}