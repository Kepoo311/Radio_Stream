<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RadioStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Read the JSON file
         $json = File::get(database_path('seeders/radiolist.json'));
         $stations = json_decode($json, true);
 
         // Loop through the stations and insert them into the database
         foreach ($stations as $station) {
             DB::table('radio_stations')->insert([
                 'stationuuid' => $station['stationuuid'],
                 'name' => $station['name'],
                 'favicon' => $station['favicon'],
                 'state' => $station['state'],
                 'votes' => $station['votes']
             ]);
         }
    }
}
