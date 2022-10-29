<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCotroller extends Controller
{
    /**
     * Admin profile
     */
    public function profile(Request $request)
    {
        # Get the authenticate user id
        $id = Auth::user()->id;

        # Get the data of the user from its id
        $adminData = User::find($id);

        return view('admin.admin_profile', compact('adminData'));

    } // End method



    /**
     * Admin logout
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');

    } // End method
}
