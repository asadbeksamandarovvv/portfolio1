<?php

namespace app\Http\Controllers\Backend;

use App\Models\Home;
use App\Models\About;
use App\Models\Contact;
use App\Models\Resume; 
use App\Models\Services;
use App\Models\Portfolio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;


class DashboardController extends Controller
{
    public  function dashboard(Request $request)
    {
       return view('backend.admin.dashboard');
    }
    public function admin_home(Request $request)
    {
        $data['getrecord'] = Home::all();
        return view('backend.home.list', $data);
    }
    public function admin_home_posts(Request $request)
    {
        // dd($request->all());
        
        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'work_experience' => 'required|string',
        ]);

        // Check if ID is present in the request
        if($request->id) {
            $record = Home::find($request->id);
            if (!$record) {
                return redirect()->back()->withErrors(['id' => 'Record not found.']);
            }
        } else {
            $record = new Home;
        }

        // Assign values
        $record->title = trim($request->title);
        $record->work_experience = trim($request->work_experience);
        $record->save();

        return redirect()->back()->with('success', 'Home page ' .
        ($request->id ? 'updated' : 'added') . ' successfully');
    }

    public function admin_about(Request $request)
    {
        $data['getrecord'] = About::all();
        return view('backend.about.list', $data);
    }
    public function admin_about_post(Request $request)
    {

        if ($request->add_to_update == "Add")
        {
            $record = request()->validate([
                'full_name' => 'request'
            ]);
            $insertRecord = new About;
        } else
        {
            $insertRecord = About::find($request->id);
        }

        $insertRecord->title = trim($request->title);
        $insertRecord->full_name = trim($request->full_name);
        $insertRecord->birthday = trim($request->birthday);
        $insertRecord->phone = trim($request->phone);
        $insertRecord->age = trim($request->age);
        $insertRecord->website = trim($request->website);
        $insertRecord->city	 = trim($request->city	);
        $insertRecord->degree = trim($request->degree);
        $insertRecord->email = trim($request->email);
        $insertRecord->freelance = trim($request->freelance);

        $insertRecord->sub_title	 = trim($request->sub_title	);
        $insertRecord->projects = trim($request->projects);
        $insertRecord->hours_of_support = trim($request->hours_of_support);
        $insertRecord->awards = trim($request->awards);
        $insertRecord->happy_clients = trim($request->happy_clients);

        $insertRecord->skils_title = trim($request->skils_title);
        $insertRecord->javascript = trim($request->javascript);
        $insertRecord->php = trim($request->php);
        $insertRecord->html = trim($request->html);
        $insertRecord->css = trim($request->css);
        $insertRecord->laravel	 = trim($request->laravel	);

        $insertRecord->updated_at = now();
        $insertRecord->created_at = now();

        if (!empty($request->file('image'))) {
            $file = $request->file('image');
            $randomStr = Str::random(30);
            $fileName = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('img/', $fileName);
            $insertRecord->image = $fileName;
        }

        $insertRecord->save();

        return redirect()->back()->with('success', 'About page successfully');

    }

    public function admin_resume(Request $request)
    {
        $data['resumes'] = Resume::all();
        return view('backend.resume.list', $data);
    }

    public function admin_portfolio(Request $request)
    {
        $data['getrecord'] = Portfolio::get();
        return view('backend.portfolio.list', $data);
    }
    public function admin_services(Request $request)
    {
        // dd($request);
        $data['getrecord'] = Services::all(); // Services modeli orqali barcha ma'lumotlarni olish
        return view('backend.services.list', $data);
    }
    public function admin_contact(Request $request)
    {
        $data['getrecord'] = Contact::get();
        return view('backend.contact.list', $data);
    }
    public function admin_contact_delete($id, Request $request)
    {
        // ID bo'yicha yozuvni topishga urinish
        $record = Contact::find($id);
    
        // Agar yozuv topilmasa, foydalanuvchiga xabar berish
        if ($record === null) {
            return redirect()->back()->with('error', 'Record not found.');
        }
    
        // Yozuv topilsa, uni o'chirish
        $record->delete();
    
        return redirect()->back()->with('success', 'Record deleted successfully.');
    }
}
