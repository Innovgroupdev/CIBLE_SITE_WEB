<?php
use Illuminate\Http\Request;

Auth::routes();

Route::get('/', 'dashboardController@index')->name('dashboard');

Route::get('missing', function () {
    return view('404');
});
/*
|--------------------------------------------------------------------------
| dashboardController
|--------------------------------------------------------------------------
|
*/
    Route::resource('admin', 'dashboardController');
    Route::resource('dashboard/dashboardSettings', 'dashboardSettingsController');
    Route::resource('dashboard/dashboardUsers', 'AdminUserController');
    Route::resource('dashboard/dashboardRoles', 'dashboardRoleController');
    Route::resource('dashboard/dashboardPosts', 'dashboardPostController');
    Route::resource('dashboard/dashboardCategores', 'dashboardCategoryController');
    Route::resource('dashboard/dashboardMenus', 'dashboardmenuController');
    Route::resource('dashboard/dashboardMenu-items', 'dashboardmenu_itemController');
    Route::resource('dashboard/dashboardAds', 'dashboardvertiserController');
    Route::resource('dashboard/dashboardCauses', 'dashboardCauseController');
    Route::resource('dashboard/dashboardEvents', 'dashboardEventController');
    Route::resource('dashboard/dashboardMessages', 'dashboardmessageController');
    Route::resource('dashboard/dashboardGalleres', 'dashboardGalleryController');

/*
|--------------------------------------------------------------------------
| resource
|--------------------------------------------------------------------------
|
*/
Route::resource('Causes', 'CauseController');
Route::resource('Events', 'EventController');
Route::resource('Posts', 'PostController');
Route::resource('Comments', 'CommentController');
Route::resource('Messages', 'messageController');
// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');
// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');

Route::get('home', 'Blog\HomeController@index')->name('home');
Route::get('blog', 'Blog\HomeController@blog')->name('blog');
Route::get('article', 'Blog\HomeController@detail')->name('detail');
Route::get('category', 'Blog\HomeController@category')->name('category');
