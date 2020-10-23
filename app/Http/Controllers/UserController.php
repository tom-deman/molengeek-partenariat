<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Company;
use App\Models\QuestionUser;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'company' => 'required|boolean',
            'value' => 'required|string|max:255'
        ]);

        if( $input['company'] === "1" ){
            $input->validate([
                'name' => 'required|string:max:255',
                'tva' => 'required|string:max:255',
                // 'logo' => 'required|file|image'
            ]);
        }

        DB::transaction(function () use ($input) {
            tap($user = User::create([
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'email' => $input['email'],
                'birthday' => $input['birthday'],
                'profession' => $input['profession'],
                'password' => Hash::make($input['password']),
                'company' => $input['company']
            ]), function (User $user) {
                $this->createTeam($user);
            });

            if( $input['company'] === "1" ){
                $company = new Company();

                $company -> user_id = $user->id;
                $company -> name = $input->input( 'name' );
                $company -> tva = $input->input( 'tva' );
                $company -> logo = 'hi';

                $company -> save();
            }

            $question = new QuestionUser();

            $question -> user_id = $user->id;
            $question -> question_id = 1;
            $question -> value = $input->input( 'value' );

            $question -> save();
        });

        return response("OK",204);
    }

    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
