<?php

use Illuminate\Database\Seeder;
use App\Model\State;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 1)->create();

        $states = [
            'Abia',
            'Abuja',
            'Adamawa',
            'Akwa Ibom',
            'Anambra',
            'Bauchi',
            'Bayelsa',
            'Benue',
            'Borno',
            'Cross River',
            'Delta',
            'Ebonyi',
            'Edo',
            'Ekiti',
            'Enugu',
            'Gombe',
            'Imo',
            'Jigawa',
            'Kaduna',
            'Kano',
            'Katsina',
            'Kebbi',
            'Kogi',
            'Kwara',
            'Lagos',
            'Nasarawa',
            'Niger',
            'Ogun',
            'Ondo',
            'Osun',
            'Oyo',
            'Plateau',
            'Rivers',
            'Sokoto',
            'Taraba',
            'Yobe',
            'Zamfara',
        ];

        foreach ($states as $name){
            $code = strtoupper(substr($name,0 , 3));
            $state = new State();
            $state->name = $name;
            $state->code = $code;
            $state->unid = uniqid($code, false);
            $state->info = '';
            $state->active = true;
            $state->added_by = 'system';
            $state->save();

        }
    }
}
