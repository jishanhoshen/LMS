<?php

namespace App\Http\Controllers;

use App\Models\code;
use Nexmo\Laravel\Facade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required|min:10|max:10|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->password = Hash::make($request['password']);
        $user->role = "user";
        $user->save();

        $user_id = $user->id;
        $code = rand(111111, 999999);
        $phone = $request->phone;

        if ($this->otp($code, $phone)) {
            $valideCode = new Code();
            $valideCode->user_id = $user_id;
            $valideCode->code = $code;
            $valideCode->save();
            return redirect('verifiaction')->with('phone', $phone);
        } else {
            return redirect()->back()->with('error', 'something went wrong! Please Try again leter');
        }
    }

    public function otp($code, $phone)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sms.net.bd/sendsms',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('api_key' => env('ALFA_API_KEY'), 'msg' => 'Your Verification Code is: ' . $code, 'to' => '880' . $phone),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return true;
    }

    public function verifyView()
    {
        return view('auth.verify');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'verification_code' => 'required',
        ]);

        $code = Code::select('code')
            ->join('users', 'codes.user_id', '=', 'users.id')
            ->where('users.phone', $request->phone)
            ->get();
            
        if ($request->verification_code ==  $code[0]->code) {
            return redirect("login")->with('success', 'OTP validation Success. You Can Login Your Account');
        }
    }
}
