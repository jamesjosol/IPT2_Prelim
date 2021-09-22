<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Nexmo\Laravel\Facade\Nexmo;

class AuthController extends Controller
{
    public function registrationForm() {
        if(auth()->check()) {
            return redirect('/dashboard');
        }
        return view('register');
    }

    public function loginForm() {
        if(auth()->check()) {
            return redirect('/dashboard');
        }
        return view('login');
    }

    public function register(Request $request) {
        $request->validate([
            'name'      => 'required|string',
            'password'  => 'required|string',
            'email'     => 'required|email|unique:users',
            'contactNo' => 'required|regex:/[0-9]{9}/',
        ]);

        $token = Str::random(24);

        $user = User::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => bcrypt($request->password),
            'remember_token'=> $token,
            'contactNo'     => '+63' . $request->contactNo,
        ]);
        // $user = User::create([
        //     'name'          => $request->name,
        //     'email'         => $request->email,
        //     'password'      => bcrypt($request->password),
        //     'remember_token'=> $token,
        //     'contactNo'     => $request->contactNo,
        // ]);

        Mail::send('verification-email', ['user'=>$user], function($mail) use ($user){
            $mail->to($user->email);
            $mail->subject('Account Verification');
            $mail->from('dummy.james69@gmail.com', 'IPT Systems');
        });

        Nexmo::message()->send([
            'to'    => '+63' . $request->contactNo,
            'from'  => 'IPT2 Prelim',
            'text'  => 'You have successfully created your account. Please check your email for the verification.'
        ]);

    

        return redirect('/login')->with('Message', 'Your account has been created. Please check your email for the verification.');
    }

    public function login(Request $request) {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|string',
            
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user) {
            return redirect('/login')->with('Error', 'Email doesn\'t exist.');
        }

        if(!$user || $user->email_verified_at==null) {
            return redirect('/login')->with('Error', 'Sorry, you are not yet verified.')->withInput($request->all());
        }

        $login = auth()->attempt([
            'email'     => $request->email,
            'password'  => $request->password
        ]);

        if(!$login) {
            return back()->with('Error', 'Invalid credentials.')->withInput($request->all());
        }

        return redirect('/dashboard');
    }

    public function verification(User $user, $token) {
        if($user->remember_token!==$token) {
            return redirect('/login')->with('Error', 'The token is invalid.');
        }

        $user->email_verified_at = now();
        $user->save();

        return redirect('/login')->with('Message', 'Your account has been verified.');
    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect('/login')->with('Message', 'Logged out successfully.');
      }
}
