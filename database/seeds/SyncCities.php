<?php

use App\City;
use http\Client;
use Illuminate\Database\Seeder;

class SyncCities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $stateQuery = $client->get('some endpoint');
        $states = $stateQuery->getBody();
        $cities = json_decode($states, true);
        foreach ($states as $city) {
            City::create(['name' => $city['name']]);
        }
    }
}
