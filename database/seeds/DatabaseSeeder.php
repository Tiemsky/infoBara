<?php

use Illuminate\Database\Seeder;
use App\Category;
use Database\Seeders\CountryTableSeeder;
use Database\Seeders\CityTableSeeder;
use Database\Seeders\StateTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

public function run()
{
    $category = [
        'Architecture and Engineering',
        'Arts, Design, Entertainment, Sports, and Media',
        'Building and Grounds Cleaning and Maintenance',
        'Business and Financial Operations',
        'Community and Social Services',
        'Computer and Mathematical',
        'Construction and Extraction',
        'Education, Training, and Library',
        'Farming, Fishing, and Forestry',
        'Food Preparation and Serving Related',
        'Healthcare Practitioners and Technical',
        'Healthcare Support',
        'Installation, Maintenance, and Repair ',
        'Legal Occupations',
        'Life, Physical, and Social Science',
        'Management',
        'Military Specific',
        'Office and Administrative Support',
        'Personal Care and Service',
        'Production',
        'Protective Service',
        'Sales and Related'
        ];
    
        foreach($category as $category)
        {
            Category::create(['category_name' =>$category]);
        }
    

    // $this->call(UserSeeder::class);
    $this->call(CountryTableSeeder::class);
    $this->call(StateTableSeeder::class);
    $this->call(CityTableSeeder::class);
    factory('App\User', 20)->create();
    factory('App\Company', 20)->create();
    factory('App\Job', 20)->create();
    factory('App\Profile', 20)->create();

   
}
}
