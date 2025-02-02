<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Common Resource Routes/Naming:
//index - Shows all date -> listings Route::get();
//show - Show single data -> listing Route::get();
//create - Show form to create new -> listing Route::post();
//store - Store Data -> new listing
//edit - Show form to edit data -> listing Route::put(); Route::patch();
//update - Update data -> listing Route::delete();
//destroy - Delete a data -> listing ROute::options()



//All Listings
Route::get('/', [ListingController::class, 'index']);

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
