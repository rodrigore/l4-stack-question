<?php

class TourItemTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('tour_items')->delete();

        $touritem = array(
            array('titulo' => 'title',
                'texto' => 'olakease',
                'saiba_mais' => 'whatever',
                'tour_id' => 1)
        );

        // Uncomment the below to run the seeder
        DB::table('tour_items')->insert($touritem);
    }

}