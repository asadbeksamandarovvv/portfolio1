<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services; 
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    public function admin_services(Request $request)
    {
        $data['getrecord'] = Services::all();
        return view('backend.services.list', $data);
    }

    public function admin_services_add()
    {
        return view('backend.services.add');
    }

    // Qo'shish amali
    public function admin_services_add_post(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $service = new Services();
        $service->title = $request->title;
        $service->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::random(30) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img/'), $fileName);
            $service->image = $fileName;
        }

        $service->save();

        return redirect('/admin/services')->with('success', 'Service added successfully.');
    }
        // Tahrirlash formasi
        public function admin_services_edit($id)
    {
        $getrecord = Services::find($id);
        return view('backend.services.edit', compact('getrecord'));
    }

    // Tahrirlash amali
    public function admin_services_edit_post($id, Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $updateRecord = Services::findOrFail($id);
        $updateRecord->title = $request->title;
        $updateRecord->description = $request->description;

        if ($request->hasFile('image')) {
            // Oldingi tasvirni o'chirish
            if (!empty($updateRecord->image) && file_exists(public_path('img/' . $updateRecord->image))) {
                unlink(public_path('img/' . $updateRecord->image));
            }

            $file = $request->file('image');
            $fileName = Str::random(30) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img/'), $fileName);
            $updateRecord->image = $fileName;
        }

        $updateRecord->save();

        return redirect()->back()->with('success', 'Service updated successfully.');
    }

    public function admin_services_delete($id)
    {
        $service = Services::findOrFail($id);

        if (!empty($service->image) && file_exists(public_path('img/' . $service->image))) {
            unlink(public_path('img/' . $service->image));
        }

        $service->delete();

        return redirect('/admin/services')->with('success', 'Service deleted successfully.');
    
    }
   
    public function admin_services_update_post(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $service = Services::findOrFail($id);
        $service->name = $request->name;
        $service->description = $request->description;
        $service->save();

        return redirect('/admin/services')->with('success', 'Service updated successfully.');
    }
}