<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home;
use App\Models\About;
use App\Models\Contact;
use App\Models\Resume;
use App\Models\Services;
use App\Models\Portfolio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('admin.admin.dashboard');
    }

    public function admin_home(Request $request)
    {
        $data['getrecord'] = Home::all();
        return view('admin.home.list', $data);
    }

    public function admin_home_posts(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'work_experience' => 'required|string',
        ]);

        $record = $request->id ? Home::find($request->id) : new Home;

        if (!$record) {
            return redirect()->back()->withErrors(['id' => 'Record not found.']);
        }

        $record->title = trim($request->title);
        $record->work_experience = trim($request->work_experience);
        $record->save();

        return redirect()->back()->with('success', 'Home page ' . ($request->id ? 'updated' : 'added') . ' successfully');
    }

    public function admin_about(Request $request)
    {
        $data['getrecord'] = About::all();
        return view('admin.about.list', $data);
    }

    public function admin_resume(Request $request)
    {
        $data['resumes'] = Resume::all();
        return view('admin.resume.list', $data);
    }

    public function admin_portfolio(Request $request)
    {
        $data['getrecord'] = Portfolio::all();
        return view('admin.portfolio.list', $data);
    }

    public function admin_services(Request $request)
    {
        $data['getrecord'] = Services::all();
        return view('admin.services.list', $data);
    }

    public function admin_contact(Request $request)
    {
        $data['getrecord'] = Contact::all();
        return view('admin.contact.list', $data);
    }

    public function admin_contact_delete($id, Request $request)
    {
        $record = Contact::find($id);

        if (!$record) {
            return redirect()->back()->with('error', 'Record not found.');
        }

        $record->delete();

        return redirect()->back()->with('success', 'Record deleted successfully.');
    }
}