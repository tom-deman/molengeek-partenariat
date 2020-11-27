<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'users', function( Blueprint $table ) {
            $table -> id();
            $table -> string( 'email' )                -> unique();
            $table -> timestamp( 'email_verified_at' ) -> nullable();
            $table -> string( 'password' );
            $table -> rememberToken();
            $table -> foreignId( 'current_team_id' )   -> nullable();
            $table -> text( 'profile_photo_path' )     -> nullable();
            $table -> text( 'id_photo' )               -> nullable();
            $table -> text( 'country' )                -> nullable();
            $table -> string( 'birthday' );
            $table -> boolean( 'company' )             -> nullable();
            $table -> string( 'profession' );
            $table -> string( 'first_name' );
            $table -> string( 'last_name' );
            $table -> timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'users' );
    }
}
