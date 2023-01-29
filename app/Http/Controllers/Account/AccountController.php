<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AccountController extends Controller
{
    public function index()
    {
       $user = User::find(Auth::id());

        return view('account.index', compact('user') );
    }

}
