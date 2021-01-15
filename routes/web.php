<?php

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

Route::get('/', function () {
    return redirect('/welcome');
});

Route::get('welcome','WelcomeController@index');
Route::get('vessel','VesselController@index');
Route::get('experience','ExperienceController@index');
Route::get('crew','CrewController@index');
Route::get('booking','BookingController@index');
Route::get('contact','ContactController@index');
Auth::routes();


Route::get('/admin', function () {
    return redirect('/admin/home');
});

Route::get('/admin/home', 'Admin\HomeController@index');

Route::post('/home_hero_save', 'Admin\HomeController@saveHeroImage');
Route::post('/home_introduction_save', 'Admin\HomeController@saveIntroduction');
Route::post('/home_hero_add', 'Admin\HomeController@addHero');
Route::post('/home_interior_save', 'Admin\HomeController@saveInterior');
Route::post('/home_interior_add', 'Admin\HomeController@addInterior');

Route::post('/home_exterior_save', 'Admin\HomeController@saveExterior');
Route::post('/home_exterior_add', 'Admin\HomeController@addExterior');

Route::post('/home_food_save', 'Admin\HomeController@saveFoodImage');
Route::post('/home_toy_save', 'Admin\HomeController@saveToyImage');
Route::post('/home_location_save', 'Admin\HomeController@saveLocationImage');


Route::get('/admin/vessel', 'Admin\VesselController@index');
Route::post('/vessel_hero_save', 'Admin\VesselController@saveHeroImage');
Route::post('/vessel_introduction_save', 'Admin\VesselController@saveIntroduction');
Route::post('/vessel_interiortext_save', 'Admin\VesselController@saveInteriortext');
Route::post('/vessel_exteriortext_save', 'Admin\VesselController@saveExteriortext');
Route::post('/specification_save', 'Admin\VesselController@saveSpecification');
Route::post('/deck1_save', 'Admin\VesselController@saveDeck1');
Route::post('/deck2_save', 'Admin\VesselController@saveDeck2');
Route::post('/deck3_save', 'Admin\VesselController@saveDeck3');
Route::post('/deck4_save', 'Admin\VesselController@saveDeck4');

Route::get('/admin/experience', 'Admin\ExperienceController@index');
Route::post('/experience_hero_save', 'Admin\ExperienceController@saveHeroImage');
Route::post('/experience_food_save', 'Admin\ExperienceController@saveFood');
Route::post('/experience_food_add', 'Admin\ExperienceController@addFood');
Route::post('/food_description_save', 'Admin\ExperienceController@saveFoodDescription');
Route::post('/experience_toy_save', 'Admin\ExperienceController@saveToy');
Route::post('/experience_toy_add', 'Admin\ExperienceController@addToy');
Route::post('/toy_description_save', 'Admin\ExperienceController@saveToyDescription');
Route::post('/destination_save', 'Admin\ExperienceController@saveDestination');
Route::post('/destination_add', 'Admin\ExperienceController@addDestination');

Route::get('/admin/crew', 'Admin\CrewController@index');
Route::post('/crew_hero_save', 'Admin\CrewController@saveHeroImage');
Route::post('/crew_save', 'Admin\CrewController@saveCrew');
Route::post('/crew_add', 'Admin\CrewController@addCrew');

Route::get('/admin/enquire', 'Admin\EnquireController@index');
Route::post('/enquire_hero_save', 'Admin\EnquireController@saveHeroImage');

Route::get('/admin/contact', 'Admin\ContactController@index');
Route::post('/contact_save', 'Admin\ContactController@contactSave');