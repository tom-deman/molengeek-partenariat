<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;


class UserController extends Controller
{
    use PasswordValidationRules;

    public function create(Request $input)
    {

        $input->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'birthday' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'password' => $this->passwordRules(),
        ]);

        DB::transaction(function () use ($input) {
            return tap(User::create([
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'email' => $input['email'],
                'birthday' => $input['birthday'],
                'profession' => $input['profession'],
                'password' => Hash::make($input['password']),
            ]));
        });

        return response("OK",204);
    }
}
