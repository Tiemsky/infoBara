<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;



$factory->define(User::class, function (Faker $faker) {
    return [
        'firstname' => $faker->name,
        'lastname' => $faker->name,
        'user_type'=>'seeker',
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

//company faker here
$factory->define(App\Company::class, function (Faker $faker) {
    return [
       'user_id'=>App\User::all()->random()->id,
       'company_name'=>$name=$faker->company,
       'slug'=>str::slug($name),
       'country'=>$faker->country,
       'state'=>$faker->state,
       'city'=>$faker->city,
       'phone'=>$faker->phoneNumber,
       'email'=>$faker->unique()->safeEmail,
       'website'=>$faker->domainName,
       'logo'=>null,
       'description'=>$faker->paragraph(rand(2,10))

    ];
});

//job faker over here!
$factory->define(App\Job::class, function (Faker $faker) {
    $job=['Full-Type','Part-Time','Freelance','Contract','Remote','Internship'];
    $education=['BEPC','BAC','BAC+1','BAC+2','BAC+3','BAC+4','BAC+5'];
    $gender =['male','female'];
    return [
       'user_id'=>App\User::all()->random()->id,
       'company_id'=>App\Company::all()->random()->id,
       'category_id'=>App\Category::all()->random()->id,
       'title'=>$title=$faker->jobTitle,
       'slug'=>str::slug($title),
       'country'=>$faker->country,
       'state'=>$faker->state,
       'city'=>$faker->city,
       'type'=>$job[array_rand($job)],
       'description'=>$faker->paragraph(rand(2,10)),
       'position'=>$faker->jobTitle,
       'min_salary'=>rand(3000, 10000),
       'max_salary'=>rand(3000, 10000),
       'status'=>rand(0, 1),
       'deadline'=>$faker->date,
       'role'=>$faker->text,
       'education'=>$education[array_rand($education)],
       'min_experience'=>rand(0, 5),
       'max_experience'=>rand(0, 5),
       'preferred_gender'=>$gender[array_rand($gender)],


    ];
});

//profile faker over here!
$factory->define(App\Profile::class, function (Faker $faker) {
    $job=['Full-Type','Part-Time','Freelance','Contract','Remote','Internship'];
    $gender =['male','female'];
    return [
     
       'user_id'=>App\User::all()->random()->id,
       'about_me'=>$faker->text,
       'country'=>$faker->country,
       'state'=>$faker->state,
       'city'=>$faker->city,
       'job_type_preferred'=>$job[array_rand($job)],
       'gender'=>$gender[array_rand($gender)],
       'expected_salary_from'=>rand(1000, 10000),
       'expected_salary_to'=>rand(1000,10000),
       'min_year_of_experience'=>rand(0, 15),
       'min_year_of_experience'=>rand(0,15),
       'date_of_birth'=>$faker->date($format = 'd-m-Y', $max = 'now'),
      

    ];
});




