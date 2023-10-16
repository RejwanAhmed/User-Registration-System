<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    /**
     * show user registration form
     *
     * @return view
     */
    public function index() {
        return view( 'userRegistration' );
    }

    /**
     * register a new user
     *
     * @param Request $request
     * @return void
     */
    public function register( Request $request ) {
        // Validation Checking
        $request->validate( [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password',
        ] );

        // Insert into the database
        $user = new User;
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->password = Hash::make( $request->firstName );
        $user->save();
        return redirect()->route( 'user.index' )->with( 'msg', "You are registered!" );
    }
}
