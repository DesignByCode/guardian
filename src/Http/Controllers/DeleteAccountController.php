<?php


namespace DesignByCode\Guardian\Http\Controllers;

class DeleteAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'password.confirm']);
    }

    public function __invoke()
    {
        auth()->user()->delete();

        return redirect()->to('/');
    }
}
