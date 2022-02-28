<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('reboot', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    dd('Done');
});

Route::get('storageLink', function () {
    Artisan::call('storage:link');
    dd('Done');
});

Route::get('migrate', function () {
    Artisan::call('migrate');
    dd('Done');
});

Route::get('seed', function () {
    Artisan::call('db:seed');
    dd('Done');
});

Route::get('migrate_fresh_seed', function () {
    Artisan::call('migrate:fresh --seed');
    dd('Done');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('role', RoleController::class);
});

Route::get('/{locale?}', function ($locale = null) {

    // dd($locale);
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
    }
    // dd(app()->getLocale());

    $today = \Carbon\Carbon::now()
        ->settings(
            [
                'locale' => app()->getLocale(),
            ]
        );
    // LL is macro placeholder for MMMM D, YYYY (you could write same as dddd, MMMM D, YYYY)
    $dateMessage = $today->isoFormat('dddd, LL');
    return view('welcome', [
        'date_message' => $dateMessage
    ]);
});

Route::get('language/{locale}', function ($locale) {

    // dd($locale);
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});

// foreach (glob(__DIR__ . '/Routes/*.php') as $filename) {
//     require $filename;
// }