<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'documents', function( Blueprint $table ) {
            $table -> id();
            $table -> string( 'url', 255 );
            $table -> string( 'name', 255 );
            $table -> text( 'description' )           -> nullable();
            $table -> foreignId( 'user_id' )          -> constrained();
            $table -> foreignId( 'document_type_id' ) -> constrained();
            $table -> timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('documents');
    }
}
