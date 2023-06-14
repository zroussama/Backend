<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateportfolioRequest;
use App\Http\Requests\UpdateportfolioRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\portfolioRepository;
use Illuminate\Http\Request;


class portfolioController extends AppBaseController
{
    /** @var portfolioRepository $portfolioRepository*/
    private $portfolioRepository;

    public function __construct(portfolioRepository $portfolioRepo)
    {
        $this->portfolioRepository = $portfolioRepo;
    }
    /**
     * Display a listing of the portfolio.
     */
    public function index(Request $request)
    {
        $portfolios = $this->portfolioRepository->paginate(10);
        return view('portfolios.index')
            ->with('portfolios', $portfolios);
    }

    /**
     * Show the form for creating a new portfolio.
     */
    public function create()
    {
        return view('portfolios.create');
    }

    /**
     * Store a newly created portfolio in storage.
     */
    public function store(CreateportfolioRequest $request)
    {
        $input = $request->all();
        $portfolio = $this->portfolioRepository->create($input);
        return redirect(route('portfolios.index'));
    }

    /**
     * Display the specified portfolio.
     */
    public function show($id)
    {
        $portfolio = $this->portfolioRepository->find($id);

        if (empty($portfolio)) {
            return redirect(route('portfolios.index'));
        }
        return view('portfolios.show')->with('portfolio', $portfolio);
    }

    /**
     * Show the form for editing the specified portfolio.
     */
    public function edit($id)
    {
        $portfolio = $this->portfolioRepository->find($id);

        if (empty($portfolio)) {
            return redirect(route('portfolios.index'));
        }

        return view('portfolios.edit')->with('portfolio', $portfolio);
    }

    /**
     * Update the specified portfolio in storage.
     */
    public function update($id, UpdateportfolioRequest $request)
    {
        $portfolio = $this->portfolioRepository->find($id);

        if (empty($portfolio)) {
            return redirect(route('portfolios.index'));
        }
        $portfolio = $this->portfolioRepository->update($request->all(), $id);
        return redirect(route('portfolios.index'));
    }

    /**
     * Remove the specified portfolio from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $portfolio = $this->portfolioRepository->find($id);

        if (empty($portfolio)) {
            return redirect(route('portfolios.index'));
        }
        $this->portfolioRepository->delete($id);
        return redirect(route('portfolios.index'));
    }
}
