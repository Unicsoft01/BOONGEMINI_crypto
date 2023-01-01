<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user)
        {
                $user_mail_msg =
                [
                    'user' => $request->name,
                    'recipient' => $request->email,
                    'fromEmail' => "Support@boongemini.com",
                    
                    'subject' => "[Welcome] Boongemini - Gateway to Unimaginable financial stability",
                    'body' => "Hey Dear $request->name, Thanks for registering on our site.",
                ];

                \Mail::send('email', $user_mail_msg, function($message) use ($user_mail_msg){
                    $message->to($user_mail_msg['recipient'])->from($user_mail_msg['fromEmail'])->subject($user_mail_msg['subject']);
                });
        }

        event(new Registered($user));

        Auth::login($user);
        // incase if user is attempting a protect page
        if (session('url.intended')) {
            return redirect(session('url.intended'));
        }
        // below will redirect user to dashboard
        return redirect(RouteServiceProvider::HOME);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }
}
