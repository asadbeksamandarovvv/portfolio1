<?php
namespace App\Services;

use App\Models\Portfolio;
use App\Http\Requests\PortfolioRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PortfolioService
{
    public function getAllPortfolios()
    {
        return Portfolio::all();
    }

    public function store(PortfolioRequest $request)
    {
        // Create a new Portfolio instance
        $portfolio = new Portfolio();
        $portfolio->title = $request->input('title');
        $portfolio->description = $request->input('description');

        // Handle the image upload if present
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::random(30) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/img', $fileName);
            $portfolio->image = $fileName;
        }

        // Save the portfolio to the database
        $portfolio->save();

        return $portfolio; // Return the created portfolio or any needed result
    }

    public function updatePortfolio(PortfolioRequest $request, $id)
{
    // Find the portfolio or throw a 404 exception if not found
    $portfolio = Portfolio::findOrFail($id);

    // Update the portfolio's title and description
    $portfolio->title = $request->input('title');
    $portfolio->description = $request->input('description');

    // Check if an image file is uploaded
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($portfolio->image && Storage::exists('public/img/' . $portfolio->image)) {
            Storage::delete('public/img/' . $portfolio->image);
        }

        // Store the new image
        $file = $request->file('image');
        $fileName = Str::random(30) . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/img', $fileName);

        // Update the portfolio's image filename
        $portfolio->image = $fileName;
    }

    // Save the portfolio
    $portfolio->save();

    // Indicate success
    return true;
}

    public function getPortfolioById($id)
    {
        $portfolio = Portfolio::find($id);

        if (!$portfolio) {
            throw new \Exception("Portfolio with ID $id not found.");
        }

        return $portfolio;
    }

    public function deletePortfolio($id)
{
    try {
        $portfolio = Portfolio::find($id);

        if (!$portfolio) {
            return false; // Portfolio not found
        }

        // Delete the associated image if it exists
        if ($portfolio->image && Storage::exists('public/img/' . $portfolio->image)) {
            Storage::delete('public/img/' . $portfolio->image);
        }

        // Delete the portfolio record
        $portfolio->delete();
        return true; // Indicate success

    } catch (\Exception $e) {
        // Log the exception
        \Log::error("Failed to delete portfolio with ID $id: " . $e->getMessage());
        return false; // Indicate failure
    }
}
}