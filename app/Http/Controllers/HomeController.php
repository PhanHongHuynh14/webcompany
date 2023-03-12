<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Option\OptionRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $optionRepository;
    public function __construct(OptionRepository $optionRepository)
    {
        $this->optionRepository = $optionRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->middleware('auth');
        return view('home');
    }

    public function trangchu()
    {
        return view('index', [
            'options' => $this->optionRepository->getAll(),
        ]);
    }
    public function contactinfo()
    {
        return view('contactinfo', [
            'options' => $this->optionRepository->getAll(),
        ]);
    }
}
