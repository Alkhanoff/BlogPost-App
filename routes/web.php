<?php


//Website
Route::get('/', 'HomeController@index')->name('home');                                                            //homepage

Route::get('/category/{id}', 'HomeController@category')->name('category');                                        //get posts by categories

Route::get('/details/{id}', 'HomeController@details')->name('details');                                            //get post single page

Route::post('/register', 'HomeController@register')->name('register');                                             //register user

Route::post('/search', 'HomeController@search')->name('search');                                                   //search post by title and text

Route::namespace('Auth')->group(function () {
    Route::view('admin/login', 'admin.login')->name('login'); //Admin Login
    Route::post('admin/enter', 'AdminLoginController@loginAdmin')->name('admin.enter');                            //Admin Login Post
    Route::post('user/enter', 'UserLoginController@loginAdmin')->name('user.enter');                               //User Login
});


//Admin Panel
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {

    Route::get('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');                                //Logout
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');                                     //UserDashboard
    Route::get('userlist', 'AdminController@userlist')->name('admin.userlist');                                    //Users List
    Route::get('user/{id}', 'AdminController@user')->name('admin.user');                                           //User Details
    Route::get('categories', 'AdminController@categoriesList')->name('admin.categories');                          //Categories List
    Route::get('category-details/{id}', 'AdminController@categorydetails')->name('admin.category-details');        //Category Deatils
    Route::post('update-category/{id}', 'AdminController@updatecategory')->name('admin.update-category');          //Update Category
    Route::get('createcategory', 'AdminController@createcategory')->name('admin.createcategory');                  //Create Category
    Route::post('new-category', 'AdminController@newcategory')->name('admin.new-category');                        //New Category
    Route::post('update-user/{id}', 'AdminController@updateuser')->name('admin.update-user');                      //Update User
    Route::post('delete-user/{id}', 'AdminController@deleteuser')->name('admin.delete-user');                      //Delete User
    Route::get('posts', 'AdminController@posts')->name('admin.posts');                                             //Posts List
    Route::get('post-details/{id}', 'AdminController@postdetails')->name('admin.post-details');                    //Post Deatils
    Route::post('update-post/{id}', 'AdminController@updatepost')->name('admin.update-post');                      //Update Post
    Route::get('soft-delete-the-post/{id}', 'AdminController@softdeletepost')->name('admin.soft-delete-the-post'); //Soft Delete
    Route::get('force-delete-the-post/{id}', 'AdminController@forcedeletepost')->name('admin.force-delete-the-post'); //Permanent Delete

});


//User Panel
Route::group(['prefix' => 'user', 'middleware' => 'auth:web'], function () {
    Route::get('logout', 'Auth\UserLoginController@logout')->name('user.logout');                                 //User Logout
    Route::get('dashboard', 'UserController@dashboard')->name('user.dashboard');                                  //User Dashboard
    Route::get('new-post', 'UserController@newpost')->name('user.new-post');                                      //User New Post
    Route::post('write-post', 'UserController@writepost')->name('user.write-post');                               //Create a Post


});