<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{

    public function loginPage()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // Validate login form
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->username;
        $password = $request->password;

        // Check credentials
        if (
            $username === env('ADMIN_USERNAME') &&
            $password === env('ADMIN_PASSWORD')
        ) {
            session(['admin_logged_in' => true]);

            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid login details');
    }

    public function dashboard()
    {
        // Protect dashboard
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $contacts = Contact::latest()->get();

        return view('admin.dashboard', compact('contacts'));
    }

    public function logout()
    {
        session()->forget('admin_logged_in');

        return redirect('/');
    }
}