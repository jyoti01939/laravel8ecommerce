<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\MenComponent;
use App\Http\Livewire\WomenComponent;
use App\Http\Livewire\KidsComponent;
use App\Http\Livewire\PagesComponent;
use App\Http\Livewire\FeaturesComponent;
use App\Http\Livewire\ExploreComponent;
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

Route::get('/',HomeComponent::class);
Route::get('/men',MenComponent::class);
Route::get('/women',WomenComponent::class);
Route::get('/kids',KidsComponent::class);
Route::get('/pages',PagesComponent::class);
Route::get('/features',FeaturesComponent::class);
Route::get('/explore',ExploreComponent::class);
