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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::match(['get','post'],'/','IndexController@index');
Route::match(['get','post'],'/products/{id}','ProductController@productControll');
Route::get('/category/{category_id}','IndexController@categoryid');
Route::get('/get-product-price/','ProductController@getPrice');
Route::match(['get','post'],'/admin','AdminControlller@login');

//---------------adcart-----------//
Route::match(['get', 'post'], '/add-cart', 'ProductController@AddCart');
//---------------DeleteCart-----------//
Route::get('/cart/delete-product/{id}', 'ProductController@DeleteCart');

//---------------cart-----------//
Route::match(['get', 'post'], '/cart', 'ProductController@Cart');
//---------------Update quitycart-----------//
Route::get('/cart-update-quatity/{id}/{quatity}', 'ProductController@updateQuatity');


//Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();



Route::group(['middleware'=>['auth']],function(){
//-----------------------===Dassboard==---------------------------------------//

Route::match(['get','post'],'/admin/dashboard','AdminControlller@dashboard');
Route::match(['get','post'],'admin/logout','AdminControlller@logout');


//-------------------------------====Categary=====-----------------------------------------//

Route::match(['get','post'],'/admin/Category','CategoryController@Category');
Route::match(['get','post'],'/admin/Category-View','CategoryController@ViewCategory');
Route::match(['get','post'],'/admin_Category_Edit/{id}','CategoryController@CategoryEdit');
Route::match(['get','post'],'/admin_Category_Update/{id}','CategoryController@CategoryUpdate');
Route::match(['get','post'],'/admin_Category_Delete/{id}','CategoryController@CategoryDelete');
Route::match(['get','post'],'/Admin_UdateStatus_category/{id}','CategoryController@EnableStatus');
Route::match(['get','post'],'/Admin_disable_category/{id}','CategoryController@DisableStatus');

// ------------------------------==product Atributes==----------------------------------------//

Route::match(['get','post'],'/Admin_Add_Attribute/{id}','ProductController@Attribucte');
Route::match(['get','post'],'/Admin_Delete_Attribute/{id}','ProductController@DeleteAttribute');
Route::match(['get','post'],'/Admin_Edit_Attribute/{id}','ProductController@EditAttribute');
#---------------------------------------------imgaage---------------------------------------# 
Route::match(['get','post'],'/Admin_image_Attribute/{id}','ProductController@imageAttribute');
Route::match(['get','post'],'/Admin_imageDelete_Attribute/{id}','ProductController@imageDelete');


//------------------------------===Product==----------------------------------------//

Route::get('/admin/product',['as'=>'Product','uses'=>'ProductController@Product']);
Route::match(['get','post'],'/admin/ProductSave','ProductController@ProductSave');
Route::match(['get','post'],'/admin/Product_View','ProductController@ProductView');
Route::match(['get','post'],'/Admin_productEdit/{id}','ProductController@productEdit');
Route::match(['get','post'],'/Admin_ProductUpdate/{id}','ProductController@ProductUpdate');
Route::match(['get','post'],'/Admin_ProductDelete/{id}','ProductController@destroy');
Route::match(['get','post'],'/Admin_UdateStatus/{id}','ProductController@UpdateStatus');
Route::match(['get','post'],'/Admin_StatusEnable/{id}','ProductController@statEnable');
Route::match(['get','post'],'/Admin_feartur_product/{id}','ProductController@fearturdProduct');
Route::match(['get','post'],'/Admin_feartur_Disable/{id}','ProductController@fearturdDisable');


//---------------------------===Baner===-------------------------------------------------//
Route::match(['get','post'],'/Admin-bannser-view','BannerController@Banner');
Route::match(['get','post'],'/Admin-Add-banner','BannerController@AddBanner');
Route::match(['get','post'],'/Admin-Edit-banner/{id}','BannerController@EditBanner');
Route::match(['get','post'],'/Admin-Update-banner/{id}','BannerController@BannerUpdate');
Route::match(['get','post'],'/Admin-Delete-banner/{id}','BannerController@BannerDelete');
Route::match(['get','post'],'/Admin-statusEnable-banner/{id}','BannerController@BannerStatus');
Route::match(['get','post'],'/Admin-statusDisable-banner/{id}','BannerController@BannerStatusdisable');

//-----------------------==Coupons Rout==-------------------------------------------//

Route::match(['get', 'post'], '/Admin/add-coupon', 'CouponsController@addCoupon');
Route::match(['get', 'post'], '/Admin/View-coupon', 'CouponsController@ViewCoupon');
Route::match(['get','post'],'/coupon_Disable/{id}','CouponsController@updateStatus');
Route::match(['get','post'],'/coupon_StatusEnable/{id}','CouponsController@statEnable');

});


