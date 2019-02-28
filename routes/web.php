<?php

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

//Store
Route::get('/', 'StoreController@index')->name('index');

    Route::get('menu', 'StoreController@menu')->name('menu');
    Route::get('menu/categoria/{slug}', 'StoreController@menuCategory')->name('menu-category');
    Route::get('ofertas', 'StoreController@offer')->name('offer');

Route::get('nuestro_equipo', 'StoreController@about')->name('about');
Route::get('contactos', 'StoreController@contact')->name('contact');


    Route::get('producto-detalles/{slug}', 'StoreController@showProduct')->name('product-detail');

Route::get('subscription', 'StoreController@subscription')->name('subscription');
Route::get('mensaje', 'StoreController@message')->name('message');
Route::POST('comment', 'CommentController@comment')->name('comment');


//Cart
Route::middleware(['auth'])->group( function() {
    Route::get('cart/show', 'Web\\CartController@show')->name('cart-show');
    Route::get('cart/add/{product}', 'Web\\CartController@add')->name('cart-add');
    Route::get('cart/delete/{product}', 'Web\\CartController@delete')->name('cart-delete');
    Route::get('cart/trash', 'Web\\CartController@trash')->name('cart-trash');
    Route::get('cart/update/{product}/{quantity}/', 'Web\\CartController@update')->name('cart-update');
    Route::get('cart/quotation/add/{product}', 'Web\\CartController@add')->name('cart-quotation-add');
});


//Auth
Auth::routes();

Route::middleware(['auth'])->group( function() {
    //home
    Route::get('/home', 'HomeController@index')->name('home');


    //Order Details
    Route::get('order-detail', 'Web\\CartController@orderDetail')->name('order-detail');
    Route::get('process-order', 'Web\\PaymentController@processOrder')->name('process-order');


    //Admin
    Route::resource('admin/categories', 'Admin\\CategoriesController');
    Route::resource('admin/status', 'Admin\\StatusController');

    //Roles
    Route::post('admin/roles/store', 'Admin\\RolesController@store')->name('roles.store')
        ->middleware('permission:roles.create');

    Route::get('admin/roles', 'Admin\\RolesController@index')->name('roles.index')
        ->middleware('permission:roles.index');

    Route::get('admin/roles/create', 'Admin\\RolesController@create')->name('roles.create')
        ->middleware('permission:roles.create');

    Route::PATCH('admin/roles/{role}', 'Admin\\RolesController@update')->name('roles.update')
        ->middleware('permission:roles.edit');

    Route::get('admin/roles/{role}', 'Admin\\RolesController@show')->name('roles.show')
        ->middleware('permission:roles.show');

    Route::delete('admin/roles/{role}', 'Admin\\RolesController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');

    Route::get('admin/roles/{role}/edit', 'Admin\\RolesController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');

    //Products
    Route::post('admin/products', 'Admin\\ProductsController@store')->name('products.store')
        ->middleware('permission:products.store');

    Route::get('admin/products', 'Admin\\ProductsController@index')->name('products.index')
        ->middleware('permission:products.index');

    Route::get('admin/products/create', 'Admin\\ProductsController@create')->name('products.create')
        ->middleware('permission:products.create');

    Route::PATCH('admin/products/{product}', 'Admin\\ProductsController@update')->name('products.update')
        ->middleware('permission:products.edit');

    Route::get('admin/products/{product}', 'Admin\\ProductsController@show')->name('products.show')
        ->middleware('permission:products.show');

    Route::delete('admin/products/{product}', 'Admin\\ProductsController@destroy')->name('products.destroy')
        ->middleware('permission:products.destroy');

    Route::get('admin/products/{product}/edit', 'Admin\\ProductsController@edit')->name('products.edit')
        ->middleware('permission:products.edit');

    //users
    Route::get('admin/users', 'Admin\\UsersController@index')->name('users.index')
        ->middleware('permission:users.index');

    Route::PATCH('admin/users/{user}', 'Admin\\UsersController@update')->name('users.update')
        ->middleware('permission:users.edit');

    Route::get('admin/users/{user}', 'Admin\\UsersController@show')->name('users.show')
        ->middleware('permission:users.show');

    Route::delete('admin/users/{user}', 'Admin\\UsersController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');

    Route::get('admin/users/{user}/edit', 'Admin\\UsersController@edit')->name('users.edit')
        ->middleware('permission:users.edit');


    Route::resource('admin/people', 'Admin\\PeopleController');
    //Route::resource('admin/orders', 'Admin\\OrdersController');

    //Orders

    Route::get('orders', 'Admin\\OrdersController@index')->name('orders.index')
        ->middleware('permission:orders.index');

    Route::put('orders/{order}', 'Admin\\OrdersController@update')->name('orders.update')
        ->middleware('permission:orders.edit');

    Route::get('orders/{order}', 'Admin\\OrdersController@show')->name('orders.show')
        ->middleware('permission:orders.show');

    Route::delete('orders/{order}', 'Admin\\OrdersController@destroy')->name('orders.destroy')
        ->middleware('permission:orders.destroy');

    Route::get('orders/{order}/edit', 'Admin\\OrdersController@edit')->name('orders.edit')
        ->middleware('permission:orders.edit');

    Route::get('orders/{order}/payment/', 'Admin\\OrdersController@payment')->name('orders.payment')
        ->middleware('permission:orders.payment');


    Route::resource('admin/order-items', 'Admin\\OrderItemsController');
    Route::resource('admin/invoices', 'Admin\\InvoicesController');

});




