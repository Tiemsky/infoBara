<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['register'=>false]);

Route::get('getCountry/getState/{id}', 'LocationController@getState')->name('getState');
Route::get('getCountry/getCity/{id}', 'LocationController@getCity')->name('getCity');


Route::get('/', 'HomeController@index')->name('welcome');
Route::get('Terms-and-policy','HomeController@terms')->name('terms-policy');
Route::get('how-it-works','HomeController@work')->name('how-it-works');
Route::get('services','ServicesController@index')->name('services');

//Authentification goes here down below
Route::get('login','LoginController@index')->name('login');
Route::post('login','LoginController@auth')->name('login-Authentication');
Route::get('reset-password','LoginController@reset_password')->name('reset-password');
Route::get('Employer/registration','EmployerController@registration')->name('employer-registration');
Route::post('Employer/registration','EmployerController@store')->name('employer-registered');
Route::get('Seeker/registration','JobSeekerController@index')->name('seeker-registration');
Route::post('Seeker/registration','JobSeekerController@store')->name('seeker-registered');
Route::get('candidates','JobSeekerController@candidate')->name('candidate-list');
Route::get('candidates/loads','JobSeekerController@loadCandidates');
 


Route::get('companies','CompanyController@index')->name('company-list');
Route::get('company/detail/{id}/{company}','CompanyController@show')->name('company-detail');



Route::get('job', 'JobController@index')->name('job-list');
Route::get('job/search/', 'JobController@search')->name('search-job');
Route::get('job/category/{name}', 'CategoryController@JobCategory')->name('job-by-category');
Route::get('job/{country}/{slug}/', 'JobController@show')->name('job-detail');


Route::POST('application/{id}', 'JobController@apply')->name('apply-for-job');
Route::POST('cancel-application/{id}','JobController@applicationCancellation')->name('cancel-application');
Route::post('save/{id}','FavouriteJobController@save')->name('save-job');
route::post('unsaved/{id}','FavouriteJobController@unsaved')->name('unsaved-job');


//all about candidates controllers!
Route::get('candidate/dashboard/','JobSeekerController@dashboard')->name('candidate-dashboard');
Route::get('candidate/dashboard/profile','JobSeekerController@create_edit')->name('create-edit');
Route::get('candidate-detail/{id}','JobSeekerController@candidate_detail')->name('candidate-details');
Route::get('candidate/dashboard/resume','JobSeekerController@create_resume')->name('create-resume');
Route::post('candidate/dashboard/profile','JobSeekerController@update')->name('update-profile');

Route::post('candidate/dashboard/resume','EducationController@save_education')->name('save-resume');
Route::post('candidate/dashboard/resume/delete/{id}/','EducationController@delete_education')->name('delete-resume');
Route::get('candidate/dashboard/resume/edit/{id}/','EducationController@edit')->name('edit-resume');
Route::PUT('candidate/dashboard/resume/update/{id}/','EducationController@update')->name('update-resume');

route::post('candidate/dashboard/skill','SkillController@store')->name('save-skill');
route::get('candidate/dashboard/skill/{id}','SkillController@show')->name('show-skill');
route::post('candidate/dashboard/skill/{id}','SkillController@update')->name('update-skill');
route::post('candidate/dashboard/skill/delete/{id}','SkillController@destroy')->name('delete-skill');

Route::post('candidate/dashboard/experience','ExperienceController@store')->name('save-experience');
Route::get('candidate/dashboard/experience/edit/{id}','ExperienceController@show')->name('show-experience');
Route::PUT('candidate/dashboard/experience/update/{id}','ExperienceController@update')->name('update-experience');
Route::post('candidate/dashboard/experience/delete/{id}','ExperienceController@destroy')->name('delete-experience');
Route::get('candidate/build_resume/','JobSeekerController@view_my_profile')->name('candidate-view-profile');
Route::get('candidate/dashboard/change-password','JobSeekerController@change_password')->name('changePassword');
Route::post('candidate/dashboard/change-password','JobSeekerController@passwordChanged')->name('passwordChanged');
Route::get('candidate/dashboard/applied','JobSeekerController@applied')->name('applied');
Route::get('candidate/dashboard/job-bookmarked','JobSeekerController@bookmarked')->name('bookmarked');
Route::get('candidate/dashboard/messages','JobSeekerController@messages')->name('messages');
Route::get('candidate/dashboard/transaction','JobSeekerController@transaction')->name('transaction');

//employer controller starts here!
Route::get('employer/dashboard','EmployerController@dashboard')->name('employer-dashboard');
Route::get('employer/profile','EmployerController@edit')->name('view-profile');
Route::post('employer/profile','EmployerController@update')->name('employer-update');
Route::get('employer/post-a-job','JobController@create')->name('post-a-job');
Route::get('employer/my-jobs','EmployerController@myJobs')->name('my-jobs');
route::get('employer/job/applicants/{id}','JobController@applicants')->name('applicants');
Route::post('employer/post-a-job','JobController@store')->name('create-a-job');
Route::get('employer/edit/job/{id}','JobController@edit')->name('edit-job');
Route::post('employer/edit/job/{id}','JobController@update')->name('update-job');
Route::post('employer/delete-job/{id}','JobController@destroy')->name('delete-job');
Route::get('employer/candidates','EmployerController@view_candidate')->name('manage-candidate');
Route::get('employer/manage-job','EmployerController@manage_job')->name('manage-job');
Route::get('employer/message','EmployerController@message')->name('message');
Route::get('employer/transaction','EmployerController@transaction')->name('transaction');
Route::get('employer/change-password','EmployerController@change_password')->name('change-password');
Route::get('employer/my-company','CompanyController@edit')->name('edit-profile');
Route::post('employer/my-company','CompanyController@update')->name('update-company');

//post controller starts here!
route::get('post', 'PostController@index')->name('post.index');
route::get('post/show/', 'PostController@show')->name('post.show');
route::get('post/create','PostController@create')->name('post.create');
route::post('post/store','PostController@store')->name('post.store');

//categories and tags!
route::get('post/category','BlogCategoryController@index');
route::get('post/category/loads','BlogCategoryController@loader');
route::post('post/category/store','BlogCategoryController@store');
route::get('post/category/edit/{id}','BlogCategoryController@edit');
route::POST('post/category/update/{id}','BlogCategoryController@update');
route::DELETE('post/category/destroy/{id}','BlogCategoryController@destroy');

route::get('admin','AdminController@index')->name('admin');
Route::get('logout','LogoutController@logout')->name('logout');