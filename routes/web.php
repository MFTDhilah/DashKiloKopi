<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUserController@index')->name('index');
            Route::get('/create',                                       'AdminUserController@create')->name('create');
            Route::post('/',                                            'AdminUserController@store')->name('store');
            Route::get('/{adminUser}/edit',                             'AdminUserController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'AdminUserController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{adminUser}',                                 'AdminUserController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUserController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('posts')->name('posts/')->group(static function() {
            Route::get('/',                                             'PostsController@index')->name('index');
            Route::get('/create',                                       'PostsController@create')->name('create');
            Route::post('/',                                            'PostsController@store')->name('store');
            Route::get('/{post}/edit',                                  'PostsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PostsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{post}',                                      'PostsController@update')->name('update');
            Route::delete('/{post}',                                    'PostsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('users')->name('users/')->group(static function() {
            Route::get('/',                                             'UsersController@index')->name('index');
            Route::get('/create',                                       'UsersController@create')->name('create');
            Route::post('/',                                            'UsersController@store')->name('store');
            Route::get('/{user}/edit',                                  'UsersController@edit')->name('edit');
            Route::post('/{user}',                                      'UsersController@update')->name('update');
            Route::delete('/{user}',                                    'UsersController@destroy')->name('destroy');
            Route::get('/{user}/resend-activation',                     'UsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});



/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('abouts')->name('abouts/')->group(static function() {
            Route::get('/',                                             'AboutsController@index')->name('index');
            Route::get('/create',                                       'AboutsController@create')->name('create');
            Route::post('/',                                            'AboutsController@store')->name('store');
            Route::get('/{about}/edit',                                 'AboutsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'AboutsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{about}',                                     'AboutsController@update')->name('update');
            Route::delete('/{about}',                                   'AboutsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('contacts')->name('contacts/')->group(static function() {
            Route::get('/',                                             'ContactsController@index')->name('index');
            Route::get('/create',                                       'ContactsController@create')->name('create');
            Route::post('/',                                            'ContactsController@store')->name('store');
            Route::get('/{contact}/edit',                               'ContactsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ContactsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{contact}',                                   'ContactsController@update')->name('update');
            Route::delete('/{contact}',                                 'ContactsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('menus')->name('menus/')->group(static function() {
            Route::get('/',                                             'MenusController@index')->name('index');
            Route::get('/create',                                       'MenusController@create')->name('create');
            Route::post('/',                                            'MenusController@store')->name('store');
            Route::get('/{menu}/edit',                                  'MenusController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MenusController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{menu}',                                      'MenusController@update')->name('update');
            Route::delete('/{menu}',                                    'MenusController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('promos')->name('promos/')->group(static function() {
            Route::get('/',                                             'PromosController@index')->name('index');
            Route::get('/create',                                       'PromosController@create')->name('create');
            Route::post('/',                                            'PromosController@store')->name('store');
            Route::get('/{promo}/edit',                                 'PromosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PromosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{promo}',                                     'PromosController@update')->name('update');
            Route::delete('/{promo}',                                   'PromosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('media')->name('media/')->group(static function() {
            Route::get('/',                                             'MediaController@index')->name('index');
            Route::get('/create',                                       'MediaController@create')->name('create');
            Route::post('/',                                            'MediaController@store')->name('store');
            Route::get('/{medium}/edit',                                'MediaController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MediaController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{medium}',                                    'MediaController@update')->name('update');
            Route::delete('/{medium}',                                  'MediaController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('images')->name('images/')->group(static function() {
            Route::get('/',                                             'ImageController@index')->name('index');
            Route::get('/create',                                       'ImageController@create')->name('create');
            Route::post('/',                                            'ImageController@store')->name('store');
            Route::get('/{image}/edit',                                 'ImageController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ImageController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{image}',                                     'ImageController@update')->name('update');
            Route::delete('/{image}',                                   'ImageController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('posts')->name('posts/')->group(static function() {
            Route::get('/',                                             'PostsController@index')->name('index');
            Route::get('/create',                                       'PostsController@create')->name('create');
            Route::post('/',                                            'PostsController@store')->name('store');
            Route::get('/{post}/edit',                                  'PostsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PostsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{post}',                                      'PostsController@update')->name('update');
            Route::delete('/{post}',                                    'PostsController@destroy')->name('destroy');
        });
    });
});