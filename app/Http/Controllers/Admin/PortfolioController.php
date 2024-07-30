<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PortfolioService;
use Illuminate\Http\Request;
use App\Http\Requests\PortfolioRequest;

class PortfolioController extends Controller
{

    protected $portfolioService;

    public function __construct(PortfolioService $portfolioService)
    {
        $this->portfolioService = $portfolioService;
    }

    public function index()
    {
        $data['getrecord'] = $this->portfolioService->getAllPortfolios();
        return view('admin.portfolio.list', $data);
    }

    public function create()
    {
        return view('admin.portfolio.add');
    }

    public function store(PortfolioRequest $request)
    {
        // Pass the request to the service
        $this->portfolioService->store($request);

        // Redirect to the portfolio index with a success message
        return redirect()->route('admin.admin.portfolios.index')
                         ->with('success', 'Portfolio added successfully.');
    }
    public function show($id)
    {
        $data['portfolio'] = $this->portfolioService->getAllPortfolios()->find($id);
        return view('admin.portfolio.show', $data);
    }

    public function edit($id)
{
    try {
        $portfolio = $this->portfolioService->getPortfolioById($id);
        return view('admin.portfolio.edit', compact('portfolio'));
    } catch (\Exception $e) {
        \Log::error("Failed to retrieve portfolio with ID $id: " . $e->getMessage());
        return redirect()->route('admin.portfolios.index')->with('error', 'Failed to retrieve portfolio.');
    }
}

    public function update(PortfolioRequest $request, $id)
    {
        $portfolio = $this->portfolioService->getAllPortfolios()->find($id);
        if (!$portfolio) {
            return redirect()->route('admin.portfolio.list')->with('error', 'Portfolio not found.');
        }

        $updated = $this->portfolioService->updatePortfolio($request, $portfolio);
        if (!$updated) {
            return redirect()->route('admin.portfolio.list')->with('error', 'Portfolio not found.');
        }

        return redirect()->route('admin.portfolio.list')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy($id)
    {
        $portfolio = $this->portfolioService->getAllPortfolios()->find($id);
        if (!$portfolio) {
            return redirect()->route('admin.portfolio.index')->with('error', 'Portfolio not found.');
        }

        $this->portfolioService->deletePortfolio($id);
        return redirect()->route('admin.admin.portfolios.index')->with('success', 'Portfolio deleted successfully.');
    }
}