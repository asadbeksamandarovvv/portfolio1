<?php 
namespace App\Services;

use App\Models\Resume;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class ResumeService
{
    // Retrieve all resumes
    public function getAllResumes()
    {
        return Resume::all(); // Directly fetch all resumes from the database
    }

    // Retrieve a single resume by ID
    public function getResumeById(int $id)
    {
        try {
            return Resume::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            // Log the exception or handle as needed
            Log::error("Resume with ID $id not found: " . $e->getMessage());
            throw $e; // or handle the error accordingly
        }
    }

    // Store a new resume
    public function storeResume(array $data)
    {
        try {
            return Resume::create($data);
        } catch (\Exception $e) {
            // Log the error and rethrow or handle it accordingly
            Log::error("Failed to create resume: " . $e->getMessage());
            throw $e;
        }
    }

    // Update an existing resume
    public function updateResume(int $id, array $data)
    {
        try {
            $resume = $this->getResumeById($id);
            $resume->update($data);
            return $resume;
        } catch (\Exception $e) {
            // Log the error and rethrow or handle it accordingly
            Log::error("Failed to update resume with ID $id: " . $e->getMessage());
            throw $e;
        }
    }

    // Delete a resume
    public function deleteResume(int $id)
    {
        try {
            $resume = $this->getResumeById($id);
            $resume->delete();
            return true; // Indicate success
        } catch (\Exception $e) {
            // Log the error and handle it accordingly
            Log::error("Failed to delete resume with ID $id: " . $e->getMessage());
            return false; // Indicate failure
        }
    }
}

// namespace App\Services;

// use App\Models\Resume;

// class ResumeService
// {
//     // Retrieve all resumes
//     public function getAllResumes()
//     {
//         $resumes = app('App\Services\ResumeService')->getAllResumes();
//         return Resume::all();
//     }

    // public function getResumeById(int $id)
    // {
    //     return Resume::findOrFail($id);
    // }

    // // Store a new resume
    // public function storeResume(array $data)
    // {
    //     $portfolio = Portfolio::find($id);

    //     $portfolio->title = $request->input('title');
    //     $portfolio->description = $request->input('description');
    //     $portfolio->description = $request->input('sub_title');
    //     $portfolio->description = $request->input('year');
    //     $portfolio->description = $request->input('about_me');
    //     $portfolio->description = $request->input('address');
    //     $portfolio->description = $request->input('phone');
    //     $portfolio->description = $request->input('email');
    //     $portfolio->save();
    //     return true; // Indicate success


    // }

//     // Update an existing resume
//     public function updateResume(int $id, array $data)
//     {
//         $resume = $this->getResumeById($id);
//         $resume->update($data);
//         return $resume;
//     }

//     // Delete a resume
//     public function deleteResume(int $id)
//     {
//         $resume = $this->getResumeById($id);
//         $resume->delete();
//     }
// }