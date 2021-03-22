<?php


namespace DesignByCode\Guardian\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * @return Illuminate\Contracts\View\Factory|Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke()
    {
        return view('guardian::pages.dashboard');
    }
}
