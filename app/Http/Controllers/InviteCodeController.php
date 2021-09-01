<?php

namespace App\Http\Controllers;

use App\Models\InviteCode;
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
        return view('invite_code.index');
    }

    /**
     * Destroy an invite code.
     *
     * @param  \App\Models\InviteCode  $invite_code
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(InviteCode $invite_code, Request $request)
    {
        if (!$request->user()->allowedInviteCodeCreation())
        {
            abort(403);
        }
        if ($invite_code->used_by != null) return;
        $invite_code->delete();
        return redirect(route('invite_code.index'));
    }
}
