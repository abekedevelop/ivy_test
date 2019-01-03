<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use App\Mail;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Str;

class FormController extends Controller
{
    public function userRegister ( Request $request ) {

//        $checkInputFlag = self::checkInput( $request );

        $user = new User;
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = bcrypt($request->input('password'));

        try {
            $user->save();
            return 'saved!';
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return 'Not saved!';
    }

    private function checkInput (Request $request)   {
        if (trim($request->input('name')) === '') {
            return 'Please enter your name!';
        }
        if (trim($request->input('surname')) === '') {
            return 'Please enter your surname.';
        }
        if (trim($request->input('email')) ==='') {
            return 'Please type type in your email.';
        }
        if (trim ($request->input('phone')) === '') {
            return 'Phone number cannot be empty!';
        } else if (!preg_match('/[0-9]{11}/', $request->input('phone'))) {
            return 'Please type in only digits (length 11 digits including 8)';
        }
        return true;
    }
}
