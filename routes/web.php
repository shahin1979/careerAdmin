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

//Auth::routes();
Auth::routes(['reset' => false]);

Route::get('admin/resetPasswordIndex', 'Auth\ResetPasswordController@showResetForm')->middleware('auth');
Route::post('admin/resetPassword', 'Auth\ResetPasswordController@reset')->middleware('auth');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('districtThanaIndex','HomeController@index');

Route::get('admin/changePasswordIndex','Auth\ChangePasswordCO@index')->middleware('auth');
Route::post('admin/changePassword','Auth\ChangePasswordCO@change')->middleware('auth');


Route::group(['prefix' => 'admin', 'namespace' => 'Security', 'middleware' => ['auth']], function () {

    Route::get('databaseBKPIndex','DatabaseBackupCO@index');
    Route::get('downloadBkp/{name}','DatabaseBackupCO@download');
    Route::get('deleteBkp/{name}','DatabaseBackupCO@destroy');
    Route::get('backupDBIndex','DatabaseBackupCO@store');
});



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

    Route::get('shortListIndex','ShortListCandidateCO@index');

    Route::get('candidate/{id}','CandidateProfileCO@profile');

    Route::get('eligible/{id}','CandidateProfileCO@eligible');

    Route::get('eligibleCandidatesIndex','EligibleCandidatesCO@index');
    Route::get('getEligible','EligibleCandidatesCO@getEligible');

    Route::get('details/{id}','EligibleCandidatesCO@details');

    Route::get('rejectCandidatesIndex','EligibleCandidatesCO@reject');


});
