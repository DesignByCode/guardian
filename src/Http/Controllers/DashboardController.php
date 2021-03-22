<?php


namespace DesignByCode\Guardian\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * @return string
     */
    public function __invoke(): string
    {
        return view('guardian::pages.dashboard');
    }
}
