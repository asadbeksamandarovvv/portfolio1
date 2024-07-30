<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AboutService;
use App\Http\Requests\AboutRequest;

class AboutController extends Controller
{
    protected $aboutService;

    public function __construct(AboutService $aboutService)
    {
        $this->aboutService = $aboutService;
    }

    public function index()
    {
        $data['getrecord'] = $this->aboutService->getAll();
        return view('admin.about.list', $data);
    }

    public function create()
    {
        // Return view to create a new About record
        return view('admin.about.create');
    }

    public function store(AboutRequest $request)
    {
        $data = $request->all(); // Extract the data from the request
        $this->aboutService->save($data); // Pass the data as an array
        return redirect()->route('admin.admin.about.index')->with('success', 'About page added successfully.');
    }

    public function edit($id)
    {
        $data['getrecord'] = $this->aboutService->findById($id);
        return view('admin.about.edit', $data);
    }

    public function update(AboutRequest $request, $id)
    {
        $data = $request->all(); // Extract the data from the request
        $this->aboutService->save($data, $id); // Pass the data and ID
       return redirect()->route('admin.about.index')->with('success', 'About page updated successfully.');
    }

    public function destroy($id)
    {
        $this->aboutService->delete($id);
        return redirect()->route('admin.about.index')->with('success', 'About page deleted successfully.');
    }
}