<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use League\Csv\Reader;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $file = public_path() . '/csv/countries.csv';
        $csv = Reader::createFromPath( $file );

        foreach( $csv as $row ) {
            $arr = explode( '|', $row[ 0 ], 2 );
            DB::table( 'countries' ) -> insert(
                array(
                    'code' => $arr[ 0 ],
                    'name' => $arr[ 1 ]
                )
            );
        };
    }
}
