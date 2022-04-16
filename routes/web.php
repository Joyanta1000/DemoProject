<?php

use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Demo;
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
    Route::resource('panel', PanelController::class);
    
    Route::prefix('role')->group(function () {
        Route::get('/assign', [RoleController::class, 'roleAssign'])->name('role.assign');
    });

    Route::prefix('permission')->group(function () {
    Route::get('/assign', [PermissionController::class, 'permissionAssign'])->name('permission.assign');
    Route::post('/assign', [PermissionController::class, 'storeAssign'])->name('permission.assign');
    });

    Route::post('/assign', [RoleController::class, 'storeAssign'])->name('store.assign');
    
    Route::resource('role', RoleController::class);

    Route::resource('permission', PermissionController::class);

    Route::resource('user', UserController::class);
});

// Route::get('/{locale?}', function ($locale = null) {

//     // dd($locale);
//     if (isset($locale) && in_array($locale, config('app.available_locales'))) {
//         app()->setLocale($locale);
//     }
//     // dd(app()->getLocale());

//     $today = \Carbon\Carbon::now()
//         ->settings(
//             [
//                 'locale' => app()->getLocale(),
//             ]
//         );
//     // LL is macro placeholder for MMMM D, YYYY (you could write same as dddd, MMMM D, YYYY)
//     $dateMessage = $today->isoFormat('dddd, LL');
//     return view('welcome', [
//         'date_message' => $dateMessage
//     ]);
// });

// Route::get('language/{locale}', function ($locale) {

//     // dd($locale);
//     app()->setLocale($locale);
//     session()->put('locale', $locale);

//     return redirect()->back();
// });

Route::get('/', function () {
    $today = \Carbon\Carbon::now()
        ->settings(
            [
                'locale' => app()->getLocale(),
            ]
        );
    // LL is macro placeholder for MMMM D, YYYY (you could write same as dddd, MMMM D, YYYY)
    $dateMessage = $today->isoFormat('dddd, LL');
    return view(
        'welcome',
        [
            'date_message' => $dateMessage
        ]
    );
});

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

// foreach (glob(__DIR__ . '/Routes/*.php') as $filename) {
//     require $filename;
// }

Route::get('/languageDemo', 'App\Http\Controllers\HomeController@languageDemo');

Route::get('demo', 'App\Http\Controllers\DemoController@index');

// Soft Deletion

Route::get("softdelete", function () {
    Demo::find(5)->delete();
});

Route::get("softdelete2", function () {
    Demo::withTrashed()->where('id', 5)->restore();
});

Route::get("forcedelete", function () {
    Demo::withTrashed()->find(5)->forceDelete();
});

// Soft Deletation


// qr Code

Route::get('qr-code-g', function () {

    \QrCode::size(500)
        ->format('png')
        ->generate('web-tuts.com', public_path('images/qrcode.png'));

    return view('qrCode.index');
});


Route::get('imagick', function () {
    if (!extension_loaded('imagick')) {
        echo 'imagick not installed';
    }
});

// qr Code

Route::get('/alpinejs', function () {
    return view('alpinejs.index');
});
