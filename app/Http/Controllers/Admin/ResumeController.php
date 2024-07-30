<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resume; // Correct namespace for Resume model
use App\Services\ResumeService;
use App\Http\Requests\ResumeRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ResumeController extends Controller
{
    protected $resumeService;

    public function __construct(ResumeService $resumeService)
    {
        $this->resumeService = $resumeService;
    }

    public function index()
    {
        $resumes = $this->resumeService->getAllResumes();
        return view('admin.resume.list', ['resumes' => $resumes]);
    }

    public function create()
    {

        return view('admin.resume.add');
    }

    public function store(ResumeRequest $request)
    {
        dd($request);
        $this->resumeService->storeResume($request);
        return redirect()->route('admin.admin.portfolio.index')
                         ->with('success', 'Portfolio added successfully.');
    
    }
    public function edit($id)
    {
        // Fetch the resume by ID
        $resume = Resume::findOrFail($id);
    
        // Pass the resume to the view
        return view('admin.resume.edit', ['resumes' => ['resumes' => $resume]]);
    }

    public function update(ResumeRequest $request, int $id)
    {
        try {
            $this->resumeService->updateResume($id, $request->validated());
            return redirect()->route('admin.resume.index')
                             ->with('success', 'Resume updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.resume.index')
                             ->with('error', 'Resume not found.');
        }
    }

    public function destroy(int $id)
    {
        try {
            $this->resumeService->deleteResume($id);
            return redirect()->route('admin.resume.index')
                             ->with('success', 'Resume deleted successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.resume.index')
                             ->with('error', 'Resume not found.');
        }
    }
}