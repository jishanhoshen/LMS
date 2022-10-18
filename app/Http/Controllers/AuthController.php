<?php

namespace App\Http\Controllers;

use Nexmo\Laravel\Facade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // protected function verify(Request $request)
    // {
    //     $data = $request->validate([
    //         'verification_code' => ['required', 'numeric'],
    //         'phone' => ['required', 'string'],
    //     ]);
    //     /* Get credentials from .env */
    //     $token = getenv("TWILIO_AUTH_TOKEN");
    //     $twilio_sid = getenv("TWILIO_SID");
    //     $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
    //     $twilio = new Client($twilio_sid, $token);
    //     $verification = $twilio->verify->v2->services($twilio_verify_sid)
    //         ->verificationChecks
    //         ->create($data['verification_code'], array('to' => $data['phone']));
    //     if ($verification->valid) {
    //         $user = tap(User::where('phone', $data['phone']))->update(['isPhoneVerified' => true]);
    //         /* Authenticate user */
    //         Auth::login($user->first());
    //         return redirect()->route('home')->with(['message' => 'Phone number verified']);
    //     }
    //     return back()->with(['phone' => $data['phone'], 'error' => 'Invalid verification code entered!']);
    // }

    // protected function create(Request $request)
    // {
    //     $data = $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'phone' => ['required', 'numeric', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    //     /* Get credentials from .env */
    //     $token = getenv("TWILIO_AUTH_TOKEN");
    //     $twilio_sid = getenv("TWILIO_SID");
    //     $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
    //     $twilio = new Client($twilio_sid, $token);
    //     $twilio->verify->v2->services($twilio_verify_sid)
    //         ->verifications
    //         ->create($data['phone'], "sms");
    //     User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'phone' => $data['phone'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    //     return redirect()->route('verify')->with(['phone' => $data['phone']]);
    // }

    public function registerView()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        $code = rand(1111,9999);

        $nexmo = app('Nexmo\Client');
        $nexmo->message()->send([
            'to' => '+8801967569642',
            'from' => 'Jishan Hoshen',
            'text' => 'Verify code: '.$code,
        ]);
        dd($nexmo);
        // return redirect('/verify');
    }
}
