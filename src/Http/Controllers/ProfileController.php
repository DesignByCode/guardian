<?php


namespace DesignByCode\Guardian\Http\Controllers;

/**
 * Class ProfileController
 * @package DesignByCode\Guardian\Http\Controllers
 */
class ProfileController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke()
    {
        return view('guardian::pages.profile');
    }
}
