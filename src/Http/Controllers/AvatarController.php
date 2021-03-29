<?php


namespace DesignByCode\Guardian\Http\Controllers;

use Illuminate\Http\Request;

class AvatarController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
//        dimensions:min_width=2000,min_height=2000
        $request->validate([
            'avatar' => 'required|max:5000|mimes:jpg,jpeg,png',
        ]);

        auth()->user()->addMedia($request->avatar)->toMediaCollection('avatar');

        return back()->withStatus('avatar-uploaded-successfully');
    }

    /**
     * @return mixed
     */
    public function destroy()
    {
        if ($image = auth()->user()->getFirstMedia('avatar')) {
            $image->delete();
        }

        return back()->withStatus('avatar-removed-successfully');
    }
}
