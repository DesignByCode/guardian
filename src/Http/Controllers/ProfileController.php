<?php


namespace DesignByCode\Guardian\Http\Controllers;

class ProfileController extends Controller
{
    public function __invoke()
    {
        return view('guardian::pages.profile');
    }
}
