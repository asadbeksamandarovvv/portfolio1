<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // Ensure this line is present
use Illuminate\Http\Request;
use App\Http\Requests\HomeRequest;
use App\Services\HomeService;

class HomePostController extends Controller
{
    protected $homeService;

    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }

    public function admin_home(HomeRequest $request)
    {
        $data['getrecord'] = $this->homeService->getAllHomes();
        return view('admin.home.list', $data);
    }

    public function store(HomeRequest $request)
    {
        try {
            $this->homeService->saveHome($request->validated(), $request->id);
            return redirect()->back()->with('success', 'Home page ' . ($request->id ? 'updated' : 'added') . ' successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}