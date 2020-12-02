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

class UserController extends Controller {
    use PasswordValidationRules;

    public function create( Request $input ) {
        $input -> validate( [
            'first_name'    => 'required|string|max:255',
            'last_name'     => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'birthday'      => 'required|string|max:255',
            'profession'    => 'required|string|max:255',
            'password'      => $this->passwordRules(),
            'company'       => 'required|boolean',
            'value'         => 'required|string|max:255',
            'country'       => 'required|string|max:255',
            'id_photo'      => 'required|file|image|mimes:jpeg,png,jpg,gif,svg',
            'id_photo_back' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg'
        ] );

        if( $input['company'] === "1" ) {
            $input -> validate( [
                'name' => 'required|string:max:255|unique:companies',
                'tva'  => 'required|string:max:255',
                'logo' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg',
                'company_country' => 'required|string:max:255'
            ] );
        }

        DB::transaction(function () use ($input) {
            $idPhotoName = time() . \Str::random(6) . '.' . $input -> id_photo -> extension();
            $input -> id_photo -> move( public_path( 'storage' ), $idPhotoName );

            $idPhotoBackName = time() . \Str::random(6) . '.' . $input -> id_photo_back -> extension();
            $input -> id_photo_back -> move( public_path( 'storage' ), $idPhotoBackName );

            tap( $user = User::create( [
                'first_name'    => $input[ 'first_name' ],
                'last_name'     => $input[ 'last_name' ],
                'email'         => $input[ 'email' ],
                'birthday'      => $input[ 'birthday' ],
                'profession'    => $input[ 'profession' ],
                'password'      => Hash::make( $input[ 'password' ] ),
                'company'       => $input[ 'company' ],
                'country'       => $input[ 'country' ],
                'id_photo'      => 'storage/' . $idPhotoName,
                'id_photo_back' => 'storage/' . $idPhotoBackName
            ] ), function( User $user ) {
                $this -> createTeam( $user );
            } );

            $question = new QuestionUser();
            $question -> user_id     = $user->id;
            $question -> question_id = 1;
            $question -> value       = $input->input( 'value' );
            $question -> save();

            if( $input[ 'company' ] === "1" ){
                $imageName = time() . \Str::random(6) . '.' . $input -> logo -> extension();
                $input -> logo -> move( public_path( 'storage' ), $imageName );

                $company = new Company();
                $company -> user_id = $user  -> id;
                $company -> name    = $input -> input( 'name' );
                $company -> tva     = $input -> input( 'tva' );
                $company -> logo    = 'storage/' . $imageName;
                $company -> country = $input -> input( 'company_country' );
                $company -> save();
            }
        });
        return response( "OK", 204 );
    }


    protected function createTeam( User $user ) {
        $user -> ownedTeams() -> save( Team::forceCreate( [
            'user_id'       => $user->id,
            'name'          => explode( ' ', $user->name, 2 )[ 0 ] . "'s Team",
            'personal_team' => true
        ] ) );
    }
}
