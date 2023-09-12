<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CampaignPageController extends Controller
{
    public function index($slug)
    {
        if (view()->exists("campaign.$slug")) {
            return view("campaign.$slug", compact('slug'));
        } else {
            abort(404);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required','string','max:50'],
            'last_name' => ['required','string','max:50'],
            'email' => ['required','email','max:255'],
        ]);
        return to_route('campaign-page.success')->with(['email' => $request->input('email')]);
    }

    public function success()
    {
        return view('campaign.success', ['email' => session('email')]);
    }
}
