<?php

use App\Models\City;
use App\Models\Country;
use App\Models\Desktop;
use App\Models\Processor;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Process\Process;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/processor', function () {
//     // get price of desktop through processor
//     $price  = Processor::find(1)->desktop;
//     return $price->price;
// });

Route::get('/cities', function () {
    // get price of desktop through processor
    // $cities  = Country::find(1)->cities;
    // return $cities;

    $cities = City::all();
    foreach ($cities as $city) {
        $coutry_name = $city->country->name;
        $city->country_name = $coutry_name;
    }
    dd($cities);
});
