<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function show(): View
    {
        return view('admin.signin');
    }

    public function login(Request $request): View
    {

        // {
        //     // Validate the login request
        //     $credentials = $request->validate([
        //         'email' => 'required|email',
        //         'password' => 'required',
        //     ]);
    
        //     // Attempt to log in the user
        //     if (Auth::attempt($credentials)) {
        //         // Authentication passed
        //         return view ('pages.dboard'); // Redirect to the intended URL or your dashboard route
        //     } else {
        //         // Authentication failed
        //         return redirect()->route('admin.signin')->with('error', 'Invalid email or password.');
        //     }
        // }


         return view('pages.dboard');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(AdminLoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
