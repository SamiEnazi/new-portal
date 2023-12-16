<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});


Route::post('/search', function (Request $request) {
    $data = [
        'searchText' => $request->searchText,
        'searchPrefix' => $request->searchPrefix,
        'searchFilter' => $request->searchFilter
    ];
    session()->flash('data', $data);
    return redirect()->back();
})->name('search');

Route::get('/setLang/{locale}', [LanguageController::class, 'changeLanguage'])->name('setLang');