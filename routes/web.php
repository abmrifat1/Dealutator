<?php



Route::get('/', 'WelcomeController@index');
Route::get('/category', 'WelcomeController@category');
Route::get('/customer', 'CustomerController@customer');
Route::post('/new-customer', 'CustomerController@saveCustomerInfo');
Route::post('/customer-login', 'CustomerController@customerLogin');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage-form', 'FormController@manageFormInfo');





Route::get('/unpublished-category/{id}', 'CategoryController@unpublishedCategoryInfo');
Route::get('/published-category/{id}', 'CategoryController@publishedCategoryInfo');
Route::get('/edit-category/{id}', 'CategoryController@editCategoryInfo');
Route::post('/update-category', 'CategoryController@updateCategoryInfo');
Route::get('/delete-category/{id}', 'CategoryController@deleteCategoryInfo');

Route::get('/add-brand', 'BrandController@addBrand');
Route::post('/new-brand', 'BrandController@saveBrandInfo');



Route::get('/add-product', 'ProductController@addProduct');
Route::post('/new-product', 'ProductController@saveProductInfo');













