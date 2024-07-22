<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resume; 
use Illuminate\Support\Str;

class ResumeController extends Controller
{
    public function admin_resume(Request $request)
    {
        $data['getrecord'] = Resume::all();
        return view('backend.resume.list', $data);
    }

    public function admin_resume_add()
    {
        return view('backend.resume.add');
    }

    public function admin_resume_add_post(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'year' => 'required|numeric',
            'about_me' => 'required|string',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'description' => 'required|string',
        ]);

        $resume = new Resume();
        $resume->title = $request->title;
        $resume->sub_title = $request->sub_title;
        $resume->year = $request->year;
        $resume->about_me = $request->about_me;
        $resume->address = $request->address;
        $resume->phone = $request->phone;
        $resume->email = $request->email;
        $resume->description = $request->description;
        $resume->save();

        return redirect('/admin/resume')->with('success', 'Resume added successfully.');
    }

    public function admin_resume_edit($id)
    {
        $getrecord = Resume::find($id);
        return view('backend.resume.edit', compact('getrecord'));
    }

    public function admin_resume_edit_post($id, Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'year' => 'required|numeric',
            'about_me' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
            'description' => 'nullable|string',
        ]);

        $resume = Resume::findOrFail($id);
        $resume->title = $request->title;
        $resume->sub_title = $request->sub_title;
        $resume->year = $request->year;
        $resume->about_me = $request->about_me;
        $resume->address = $request->address;
        $resume->phone = $request->phone;
        $resume->email = $request->email;
        $resume->description = $request->description;
        $resume->save();

        return redirect()->route('admin.resume')->with('success', 'Resume updated successfully.');
    }

    public function admin_resume_delete($id)
    {
        $resume = Resume::findOrFail($id);
        $resume->delete();

        return redirect()->route('admin.resume')->with('success', 'Resume deleted successfully.');
    }
}