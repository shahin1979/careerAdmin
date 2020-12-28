<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\MailChangePasswordNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangePasswordCO extends Controller
{
    public function index()
    {
        return view('auth.passwords.change');
    }
    public function change(Request $request)
    {

        $this->validator($request->all(), $request->user())->validate();

        $request->user()->fill([
            'password' => Hash::make($request['password'])
        ])->save();

        return redirect()->route('home')->with('success','Your password has been changed');
    }

    protected function validator(array $data, $user)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required',
                'min:8',
                'confirmed'],

            'current_password' => ['required', function ($attribute, $value, $fail) use ($user) {
                if (!Hash::check($value, $user->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }]
        ]);
    }
}
