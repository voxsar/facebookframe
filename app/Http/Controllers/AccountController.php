<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\CourtType;
use App;

class AccountController extends Controller
{
    //Handles the account related actions including login and registration

    public function login()
    {
    	# code...
    	return view('login');
    }

    public function register()
    {
    	# code...
    	return view('register');
    }

    public function forgot()
    {
    	# code...
    	return view('forgot');
    }

    public function validatelogin()
    {
        # code...
        return view('forgot');
    }

    public function all_lawyeraccounts()
    {
        # code...
        $lawyers = App\Lawyer::all();
        $data = array(
            'users' => $lawyers,
            'usertype_title' => 'Registered Lawyers'
        );
        return view('accounts/accounts', $data);
    }

    public function all_customeraccounts()
    {
        # code...
        $lawyers = App\User::all();
        $data = array(
            'users' => $lawyers,
            'usertype_title' => 'Registered Customers'
        );
        return view('accounts/accounts', $data);
    }
}
