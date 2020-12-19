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


Route::group(['prefix' => 'profile', 'namespace' => 'Profile', 'middleware' => ['auth']], function () {

    Route::get('personalInfoIndex','CandidateProfileCO@index');
//    Route::post('changePassword',['as' => 'changePassword', 'uses' => 'ChangePasswordCO@update']);
//    Route::get('myProfileIndex','ViewMyProfileCO@index');

//    Route::get('changeSecurityPinIndex','ChangeSecurityPinCO@index');
//    Route::get('changeSecurityPin','ChangeSecurityPinCO@update')->middleware('verifiedOTP');


});
