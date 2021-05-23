<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class InviteCodeController extends Controller
{
    /**
     * Display the invite code view.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if (!$request->user()->allowedInviteCodeCreation())
        {
            abort(403);
        }
        return view('dashboard');
    }
}
