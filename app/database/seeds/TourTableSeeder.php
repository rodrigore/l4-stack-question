<?php

class TourTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('tours')->delete();

        $tour = array(
            array('titulo' => 'title',
             'slug' => 'rodri',
             'main' => 1,
             'wrh_id' => 1)
        );

        // Uncomment the below to run the seeder
        DB::table('tours')->insert($tour);
    }

}