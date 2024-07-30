<?php

namespace App\Services;

use App\Models\Services;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServiceService
{
    // Retrieve all services
    public function getAllServices()
    {
        return Services::all();
    }

    // Create a new service
    public function createService(array $data)
    {
        $service = new Services();
        $service->title = $data['title'];
        $service->description = $data['description'];

        if (isset($data['image']) && $data['image']->isValid()) {
            $file = $data['image'];
            $fileName = Str::random(30) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('img', $fileName, 'public'); // Using Storage facade for file management
            $service->image = $fileName;
        }

        $service->save();
    }

    // Find service by ID
    public function findServiceById($id)
    {
        return Services::findOrFail($id);
    }

    // Update a service
    public function updateService($id, array $data)
    {
        $service = $this->findServiceById($id);
        $service->title = $data['title'];
        $service->description = $data['description'];

        if (isset($data['image']) && $data['image']->isValid()) {
            // Delete old image if it exists
            if (!empty($service->image) && Storage::disk('public')->exists('img/' . $service->image)) {
                Storage::disk('public')->delete('img/' . $service->image);
            }

            $file = $data['image'];
            $fileName = Str::random(30) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('img', $fileName, 'public'); // Using Storage facade for file management
            $service->image = $fileName;
        }

        $service->save();
    }

    // Delete a service
    public function deleteService($id)
    {
        $service = $this->findServiceById($id);

        if (!empty($service->image) && Storage::disk('public')->exists('img/' . $service->image)) {
            Storage::disk('public')->delete('img/' . $service->image);
        }

        $service->delete();
    }
}