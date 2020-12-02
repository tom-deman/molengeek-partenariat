<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'companies', function( Blueprint $table ) {
            $table -> id();
            $table -> foreignId( 'user_id' ) -> constrained() -> cascadeOnDelete();
            $table -> text( 'country' ) -> nullable();
            $table -> string( 'name', 255 ) -> unique();
            $table -> string( 'logo' );
            $table -> string( 'tva', 255 );
            $table -> timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('companies');
    }
}
