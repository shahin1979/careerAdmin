<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
})->middleware('guest');

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'support', 'namespace' => 'Support', 'middleware' => ['auth']], function () {

    Route::get('requestResponseIndex','HelpRequestResponseCO@index');
    Route::get('getRequestData','HelpRequestResponseCO@getRequestData');
    Route::post('submitResponseIndex','HelpRequestResponseCO@update');
//    Route::get('PostOfficeIndex','PostOfficeCO@index');
//    Route::get('getPOfficeData','PostOfficeCO@getPOfficeData');
//    Route::post('PostOfficeIndex','PostOfficeCO@store');

//    Route::get('changeSecurityPinIndex','ChangeSecurityPinCO@index');
//    Route::get('changeSecurityPin','ChangeSecurityPinCO@update')->middleware('verifiedOTP');


});


Route::group(['prefix' => 'bangladesh', 'namespace' => 'Bangladesh', 'middleware' => ['auth']], function () {

    Route::get('PoliceStationIndex','PoliceStationCO@index');
    Route::get('getPStationsData','PoliceStationCO@getPStationsData');
    Route::post('PoliceStationIndex','PoliceStationCO@store');
    Route::get('PostOfficeIndex','PostOfficeCO@index');
    Route::get('getPOfficeData','PostOfficeCO@getPOfficeData');
    Route::post('PostOfficeIndex','PostOfficeCO@store');

//    Route::get('changeSecurityPinIndex','ChangeSecurityPinCO@index');
//    Route::get('changeSecurityPin','ChangeSecurityPinCO@update')->middleware('verifiedOTP');


});


Route::group(['prefix' => 'profile', 'namespace' => 'Profile', 'middleware' => ['auth']], function () {

    Route::get('personalInfoIndex','CandidateProfileCO@index');
    Route::get('getProfiles','CandidateProfileCO@getProfile');

    Route::get('groupIndex/{district}/{thana}','CandidateProfileCO@viewGroupIndex');


//    Route::get('changeSecurityPinIndex','ChangeSecurityPinCO@index');
//    Route::get('changeSecurityPin','ChangeSecurityPinCO@update')->middleware('verifiedOTP');


});
