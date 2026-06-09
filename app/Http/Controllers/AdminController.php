<?php

namespace App\Http\Controllers;

use App\Mail\VerificationCodeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function adminLogout(Request $request)
    {
        // Auth::logout();
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    //End Method

    // public function adminLogin(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();

    //         $verificationCode = rand(100000, 999999);

    //         // Store the verification code in the session
    //     session(['verification_code' => $verificationCode, 'user_id' => $user->id]);
    //         // Send the verification code to the user's email

    //             // You can use Laravel's built-in mail functionality to send the email
    //     Mail::to($user->email)->send(new VerificationCodeMail($verificationCode));

    //     Auth::logout();

    //     // Authentication passed...
    //     return redirect()->route('custom.verification.form')->with('success', 'A verification code has been sent to your email. Please check your inbox and enter the code to proceed.');
    //     }

    //     return back()->with('error', 'Invalid email or password.');
    // }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return back()->with('error', 'Invalid email or password.');
        }

        $request->session()->regenerate();

        $user = Auth::user();

        // Generate secure 6-digit OTP
        $verificationCode = random_int(100000, 999999);

        session([
            'verification_code' => $verificationCode,
            'user_id' => $user->id,
        ]);

        try {
            Mail::to($user->email)
                ->send(new VerificationCodeMail($verificationCode));

            Auth::logout();

            return redirect()
                ->route('custom.verification.form')
                ->with(
                    'status',
                    'A verification code has been sent to your email. Please check your inbox and enter the code to proceed.'
                );
        } catch (\Exception $exception) {

            Auth::logout();

            return redirect()->back()->with(
                'error',
                'Unable to send verification code. Please try again.'
            );
        }
    }

    //End Method

    public function showVerification()
    {
        return view('auth.verify');
    }

    //End Method

    public function verificationVerify(Request $request){
        $request->validate([
            'code' => ['required', 'digits:6'],
        ]);

        if ($request->code == session('verification_code')) {
            $user = User::find(session('user_id'));

            Auth::login($user);

            session()->forget(['verification_code', 'user_id']);

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['code' => 'Invalid verification code. Please try again.']);
    }

    //End Method

    public function adminProfile()
    {
        return view('admin.admin_profile');
    }
    //End Method
}
