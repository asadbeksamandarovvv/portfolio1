<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function admin_portfolio(Request $request)
    {
        $data['getrecord'] = Portfolio::all();
        return view('backend.portfolio.list', $data); 
        // $portfolio = Portfolio::find($request->id); // Assuming you're retrieving portfolio by ID

        // if (!$portfolio) {
        //     return redirect()->back()->with('error', 'Portfolio not found.');
        // }
    }


    public function admin_portfolio_add(Request $request)
    {  
        $data['getrecord'] = Portfolio::all();
        return view('backend.portfolio.add', $data);
    }

   
    public function admin_portfolio_add_post(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $portfolio = new Portfolio();
        $portfolio->title = $request->title;

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = Str::random(30) . '.' . $file->getClientOriginalExtension();
        $file->move('img/', $fileName);
        $portfolio->image = $fileName;
    }

        $portfolio->save();

        return redirect('/admin/portfolio')->with('success', 'Portfolio added successfully.');
    }
    
     // Portfolio edit sahifasini ochish
     public function admin_portfolio_edit($id)
    {
        $data = Portfolio::find($id);
        return view('admin/portfolio/edit', $data);
    }

    public function admin_portfolio_edit_post($id, Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
        ]);

        $portfolio = Portfolio::find($id);

        if (!$portfolio) {
            return redirect()->route('admin.portfolio')->with('error', 'Portfolio topilmadi.');
        }

        $portfolio->title = $request->title;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::random(30) . '.' . $file->getClientOriginalExtension();
            $file->move('img/', $fileName);
            $portfolio->image = $fileName;
        }

        $portfolio->save();

        return redirect()->route('admin.portfolio')->with('success', "Portfolio muvaffaqiyatli o'zgartirildi.");
    }


    public function admin_portfolio_update($id, Request $request)
    {
        // Formani validatsiya qilish
    // Validate request data as needed
    $validatedData = $request->validate([
        'title' => 'required',
        'image' => 'nullable|image',
    ]);

    // Find the portfolio record
    $portfolio = Portfolio::find($id);

    if (!$portfolio) {
        return redirect()->route('admin.portfolio')->with('error', 'Portfolio not found.');
    }

    // Update portfolio data
    $portfolio->title = $request->title;

    if ($request->hasFile('image')) {
        // Handle image upload
        $imagePath = $request->file('image')->store('img');
        $portfolio->image = $imagePath;
    }

    $portfolio->save();

    return redirect()->route('admin.portfolio')->with('success', 'Portfolio updated successfully.');
    }  

    public function admin_portfolio_delete($id, Request $request)
    {
        // Ma'lumotni olish
        $portfolio = Portfolio::find($id);
        
        if (!$portfolio) {
            return redirect()->back()->with('error', 'Portfolio not found');
        }
    
        // Rasm faylini o'chirish
        if (!empty($portfolio->image) && file_exists(public_path('img/' . $portfolio->image))) {
            unlink(public_path('img/' . $portfolio->image));
        }
    
        // Ma'lumotlar bazasidan yozuvni o'chirish
        $portfolio->delete();
    
        return redirect()->back()->with('success', 'Portfolio successfully deleted');
    }
    
}
