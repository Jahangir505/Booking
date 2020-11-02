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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/hotel', 'HomeController@hotelView')->name('hotel');
Route::get('/bus-listing', 'HomeController@buslisting')->name('buslisting');
Route::get('/bus-payment', 'HomeController@buspayment')->name('buspayment');
Route::get('/flight-listing', 'HomeController@flightlisting')->name('flightlisting');
Route::get('/flight-list-custom', 'HomeController@customlist')->name('customflightlist');

Route::get('/flight-payment', 'HomeController@flightpayment')->name('flightpayment');
Route::get('/holiday-detail', 'HomeController@holidaydetail')->name('holidaydetail');
Route::get('/holiday-listing', 'HomeController@holidaylisting')->name('holidaylisting');
Route::get('/holiday-payment', 'HomeController@holidaypayment')->name('holidaypayment');
Route::get('/hotel-detail/{hotel}', 'HomeController@hoteldetail')->name('hoteldetail');
Route::get('/hotel-listing', 'HomeController@hotellisting')->name('hotellisting');
Route::get('/hotel-payment', 'HomeController@hotelpayment')->name('hotelpayment');
//filtering hotels
Route::get('/hotel-listing/filter', 'HomeController@filter_hotels')->name('filter.hotels');
Route::get('/flight-listing/filter', 'HomeController@flights_filter')->name('filter.flights');

Route::get('/about-us', 'HomeController@aboutus')->name('aboutus');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/blog-overview', 'HomeController@blogoverview')->name('blogoverview');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'home'], function () {
        Route::get('/', 'HomeController@index')->name('user.home');

        Route::group(['prefix' => 'security'], function() {
            Route::get('/', 'SecurityController@index')->name('security');

            Route::post('/creategauth', 'SecurityController@creategauth')->name('security.creategauth');
            Route::post('/verifyCreateAuth', 'SecurityController@verifyCreateAuth')->name('security.verifyCreateAuth');
            Route::post('/disableTwoFactorAuth', 'SecurityController@disableTwoFactorAuth')->name('security.disableTwoFactorAuth');
            Route::post('/sendSmsAuth', 'SecurityController@sendSmsAuth')->name('security.sendSmsAuth');
            Route::post('/changePass', 'SecurityController@changePass')->name('security.changePass');
            Route::post('/verify2FAuth', 'SecurityController@verify2FAuth')->name('security.verify2FAuth');
        });

        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', 'ProfileController@index')->name('account');

            Route::post('/detail-update', 'ProfileController@detailUpdate')->name('profile.detail.update');
            Route::post('/smsverify', 'ProfileController@smsverify')->name('profile.smsverify');
            Route::post('/resendsmsverify', 'ProfileController@resendsmsverify')->name('profile.resendsmsverify');
            Route::post('/verifyCode', 'ProfileController@verifyCode')->name('profile.verifyCode');
        });
    });
});


Route::group(['prefix' => 'admin'], function () {
    //Admin AUth
    Route::get('/', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
    Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
    Route::post('/login', 'AdminAuth\LoginController@login');
    Route::post('/logout', 'AdminAuth\LoginController@logout')->name('admin.logout');
    Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'AdminAuth\RegisterController@register');

    Route::group(['middleware' => ['admin']], function(){

        // General Settings
        Route::get('/general', 'GeneralController@index')->name('general');
        Route::post('/general/update', 'GeneralController@update')->name('general.update');
        Route::get('/logo', 'GeneralController@logo')->name('logo');
        Route::post('/logo/update', 'GeneralController@logoupdate')->name('logo.update');
        Route::get('/change-profile', 'GeneralController@changeprofile')->name('change.profile');
        Route::post('/profile/update', 'GeneralController@updateprofile')->name('profile.update');
        Route::post('/password/update', 'GeneralController@updatepass')->name('password.update');
        Route::get('/footer', 'FooterSettingsController@index')->name('footer.create');
        Route::post('/footer/update', 'FooterSettingsController@store')->name('footer.update');
    
        Route::get('/navigation', 'NavigationSettingsController@index')->name('navigation.create');
        Route::post('/navigation/update', 'NavigationSettingsController@store')->name('navigation.update');
    
        //User Management
        Route::get('/users', 'UserlogController@index')->name('users');
        Route::get('/user/create', 'UserlogController@create')->name('user.create');
        Route::post('/user/store', 'UserlogController@store')->name('user.store');
        Route::get('/user/{user}', 'UserlogController@edit')->name('user.edit');
        Route::put('/user/{user}', 'UserlogController@update')->name('user.update');
        Route::post('/user/search', 'UserlogController@userSearch')->name('search.users');
        Route::get('/user-banned', 'UserlogController@banusers')->name('user.ban');
        Route::get('/mail/{user}', 'UserlogController@email')->name('email');
        Route::post('/sendmail', 'UserlogController@sendemail')->name('send.email');
        Route::post('/user/balance/{user}', 'UserlogController@blupdate')->name('user.balance');
        Route::put('/user/status/{user}', 'UserlogController@statupdate')->name('user.status');
        Route::get('/broadcast', 'UserlogController@broadcast')->name('broadcast');
        Route::post('/broadcast/email', 'UserlogController@broadcastemail')->name('broadcast.email');
        Route::get('/user-translog', 'UserlogController@transLog')->name('users.transactions');
    
    
        Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.request');
        Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('admin.password.email');
        Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.reset');
        Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
    
        //Stuff Management
        Route::get('/stuff-management','UserlogController@stuffManagement')->name('stuff.home');
    
    
        //Airlines Managemnt
        Route::get('/flights/airlines', 'AirlinesController@index')->name('airlines');
        Route::get('/flights/airlines/create', 'AirlinesController@create')->name('airlines.create');
        Route::post('/flights/airlines/store', 'AirlinesController@store')->name('airlines.store');
        Route::get('/flights/airlines/{airline}/edit', 'AirlinesController@edit')->name('airlines.edit');
        Route::put('/flights/airlines/{airline}/update', 'AirlinesController@update')->name('airlines.update');
        Route::delete('/flights/airlines/{airline}/delete', 'AirlinesController@delete')->name('airlines.delete');
    
        //flight/Route
        Route::get('/flights/routes', 'RoutesController@index')->name('routes');
        Route::get('/flights/routes/create', 'RoutesController@create')->name('routes.create');
        Route::post('/flights/routes/store', 'RoutesController@store')->name('routes.store');
        Route::get('/flights/routes/{route}/edit', 'RoutesController@edit')->name('routes.edit');
        Route::put('/flights/routes/{route}/update', 'RoutesController@update')->name('routes.update');
        Route::delete('/flights/routes/{route}/delete', 'RoutesController@delete')->name('routes.delete');
    
        //FlightPrice
        Route::get('/flights/prices', 'FlightPricesController@index')->name('flightprices'); 
        Route::get('/flights/prices/create', 'FlightPricesController@create')->name('flightprices.create');
        Route::post('/flights/prices/store', 'FlightPricesController@store')->name('flightprices.store');
        Route::get('/flights/prices/{flightPrice}/edit', 'FlightPricesController@edit')->name('flightprices.edit');
        Route::put('/flights/prices/{flightPrice}/update', 'FlightPricesController@update')->name('flightprices.update');
        Route::delete('/flights/prices/{flightPrice}/delete', 'FlightPricesController@delete')->name('flightprices.delete');
        
        //Flight management
        Route::post('/flights/store', 'FlightsController@store')->name('flights.store');
        Route::patch('/flights/{flight}/update', 'FlightsController@update')->name('flights.update');
        Route::delete('/flights/{flight}/delete', 'FlightsController@delete')->name('flights.delete');
        Route::get('/flights', 'FlightsController@index')->name('flights');
        Route::get('/flights/create', 'FlightsController@create')->name('flights.create');
        Route::get('/flights/{flight}/edit', 'FlightsController@edit')->name('flights.edit');
        Route::get('/flights/get/prices', 'FlightsController@getPricesForARoute')->name('flights.prices');
    
        //Page Management
        Route::get('/banner/create', 'HomePageSettingsController@createBanner')->name('create.banner');
        Route::post('/banner/store', 'HomePageSettingsController@storeBanner')->name('store.banner');
    
        //Hotels Management
        Route::post('/hotels/store', 'HotelSettingsController@store')->name('hotels.store'); 
        Route::put('/hotels/{hotel}/update', 'HotelSettingsController@update')->name('hotels.update');
        Route::delete('/hotels/{hotel}/delete', 'HotelSettingsController@delete')->name('hotels.delete');
        Route::get('/hotels/{hotel}/edit', 'HotelSettingsController@edit')->name('hotels.edit');
        Route::get('/hotels/create', 'HotelSettingsController@create')->name('hotels.create');
        Route::get('/hotels', 'HotelSettingsController@index')->name('hotels');
        
        //Room Management
        Route::get('/rooms', 'RoomSettingsController@index')->name('rooms');
        Route::get('/rooms/add', 'RoomSettingsController@create')->name('rooms.add');
        Route::post('/rooms/store', 'RoomSettingsController@store')->name('rooms.store');
        Route::get('/rooms/{room}/edit', 'RoomSettingsController@edit')->name('rooms.edit');
        Route::put('/rooms/{room}/update', 'RoomSettingsController@update')->name('rooms.update');
        Route::delete('/rooms/{room}/delete', 'RoomSettingsController@delete')->name('rooms.delete');
    
        //Room Pricing/Rates Management
        Route::get('/rates/{rate}/edit', 'RatesController@edit')->name('rates.edit');
        Route::put('/rates/{rate}/update', 'RatesController@update')->name('rates.update');
        Route::delete('/rates/{rate}/delete', 'RatesController@delete')->name('rates.delete');
        Route::post('/rates/store', 'RatesController@store')->name('rates.store');
        Route::get('/rates/create', 'RatesController@create')->name('rates.create');
        Route::get('/rates', 'RatesController@index')->name('rates');
    
        //Promotions management
        Route::get('/promotions/{promotion}/edit', 'PromotionsController@edit')->name('promotions.edit');
        Route::put('/promotions/{promotion}/update', 'PromotionsController@update')->name('promotions.update');
        Route::delete('/promotions/{promotion}/delete', 'PromotionsController@delete')->name('promotions.delete');
        Route::post('/promotions/store', 'PromotionsController@store')->name('promotions.store');
        Route::get('/promotions/create', 'PromotionsController@create')->name('promotions.create');
        Route::get('/promotions', 'PromotionsController@index')->name('promotions');
    
        //Facilities management
        Route::get('/facilities/{facility}/edit', 'FacilitiesController@edit')->name('facilities.edit');
        Route::put('/facilities/{facility}/update', 'FacilitiesController@update')->name('facilities.update');
        Route::delete('/facilities/{facility}/delete', 'FacilitiesController@delete')->name('facilities.delete');
        Route::post('/facilities/store', 'FacilitiesController@store')->name('facilities.store');
        Route::get('/facilities/create', 'FacilitiesController@create')->name('facilities.create');
        Route::get('/facilities', 'FacilitiesController@index')->name('facilities');
    
        //StopSale Management
        Route::get('/stopsales', 'StopSalesController@index')->name('stopsale');
        Route::get('/stopsales/related', 'StopSalesController@get_realated_data')->name('stopsale.related');
        Route::get('/stopsales/create', 'StopSalesController@create')->name('stopsale.create');
        Route::delete('/stopsales/{stopsale}/delete', 'StopSalesController@delete')->name('stopsale.delete');
        Route::put('/stopsales/{stopsale}/update', 'StopSalesController@update')->name('stopsale.update');
        Route::get('/stopsales/{stopsale}/edit', 'StopSalesController@edit')->name('stopsale.edit');
        Route::post('/stopsales/store', 'StopSalesController@store')->name('stopsale.store');
    
        //delete images from gallery
        Route::delete('/gallery/{gallery}', 'HotelSettingsController@delete_gallery')->name('gallery.delete');
    
        //transfers 
        Route::get('/transfers', 'TransfersController@index')->name('transfers');
        Route::get('/transfers/create', 'TransfersController@create')->name('transfers.create');
        Route::post('/transfers/store', 'TransfersController@store')->name('transfers.store');
        Route::get('/transfers/{transfer}/edit', 'TransfersController@edit')->name('transfers.edit');
        Route::put('/transfers/{transfer}/update', 'TransfersController@update')->name('transfers.update');
        Route::delete('/transfers/{transfer}/delete', 'TransfersController@delete')->name('transfers.delete');
        //transfersPricing
        Route::get('/transfers/pricings', 'TransferPricingsController@index')->name('pricings');
        Route::get('/transfers/pricings/create', 'TransferPricingsController@create')->name('pricings.create');
        Route::post('/transfers/pricings/store', 'TransferPricingsController@store')->name('pricings.store');
        Route::get('/transfers/pricings/{transferPricing}/edit', 'TransferPricingsController@edit')->name('pricings.edit');
        Route::put('/transfers/pricings/{transferPricing}/update', 'TransferPricingsController@update')->name('pricings.update');
        Route::delete('/transfers/pricings/{transferPricing}/delete', 'TransferPricingsController@delete')->name('pricings.delete');
        Route::get('/transfers/pricings/cities', 'TransferPricingsController@getCities')->name('pricings.cities');
    
        //Cruise
        Route::get('/cruises', 'CruiseController@index')->name('cruises');
        Route::get('/cruises/create', 'CruiseController@create')->name('cruises.create');
        Route::post('/cruises/store', 'CruiseController@store')->name('cruises.store');
        Route::get('/cruises/{cruise}/edit', 'CruiseController@edit')->name('cruises.edit');
        Route::put('/cruises/{cruise}/update', 'CruiseController@update')->name('cruises.update');
        Route::delete('/cruises/{cruise}/destroy', 'CruiseController@destroy')->name('cruises.destroy');
        
        //CruiseRoom
        Route::get('cruises/rooms', 'CruiseRoomController@index')->name('cruises.rooms');
        Route::get('cruises/rooms/create', 'CruiseRoomController@create')->name('cruises.rooms.create');
        Route::post('cruises/rooms/store', 'CruiseRoomController@store')->name('cruises.rooms.store');
        Route::get('cruises/rooms/{cruiseRoom}/edit', 'CruiseRoomController@edit')->name('cruises.rooms.edit');
        Route::put('cruises/rooms/{cruiseRoom}/update', 'CruiseRoomController@update')->name('cruises.rooms.update');
        Route::delete('cruises/rooms/{cruiseRoom}/destroy', 'CruiseRoomController@destroy')->name('cruises.rooms.destroy');
    
        //Cruise Mealplan
        Route::get('/mealplans', 'MealPlanController@mealplan_listing')->name('mealplans');
        Route::get('/mealplans/create', 'MealPlanController@mealplan_create')->name('mealplans.create');
        Route::post('/mealplans/store', 'MealPlanController@mealplan_store')->name('mealplans.store');
        Route::get('/mealplans/{mealplan}/edit', 'MealPlanController@mealplan_edit')->name('mealplans.edit');
        Route::put('/mealplans/{mealplan}/update', 'MealPlanController@mealplan_update')->name('mealplans.update');
        Route::delete('/mealplans/{mealplan}/destroy', 'MealPlanController@mealplan_destroy')->name('mealplans.destroy');
    
        //mealplan food
        Route::get('/mealplans/foods', 'MealPlanController@food_listing')->name('foods');
        Route::get('/mealplans/foods/create', 'MealPlanController@food_create')->name('foods.create');
        Route::post('/mealplans/foods/store', 'MealPlanController@food_store')->name('foods.store');
        Route::get('/mealplans/foods/{food}/edit', 'MealPlanController@food_edit')->name('foods.edit');
        Route::put('/mealplans/foods/{food}/update', 'MealPlanController@food_update')->name('foods.update');
        Route::delete('/mealplans/foods/{food}/destroy', 'MealPlanController@food_destroy')->name('foods.destroy');
    
        //mealplan meal
        Route::get('/mealplans/meals', 'MealPlanController@meal_listing')->name('meals');
        Route::get('/mealplans/meals/create', 'MealPlanController@meal_create')->name('meals.create');
        Route::post('/mealplans/meals/store', 'MealPlanController@meal_store')->name('meals.store');
        Route::get('/mealplans/meals/{meal}/edit', 'MealPlanController@meal_edit')->name('meals.edit');
        Route::put('/mealplans/meals/{meal}/update', 'MealPlanController@meal_update')->name('meals.update');
        Route::delete('/mealplans/meals/{meal}/destroy', 'MealPlanController@meal_destroy')->name('meals.destroy');
    
        //Cruise Sailing Dates
        Route::get('/sailings', 'SailingDateController@index')->name('sailings');
        Route::get('/sailings/create', 'SailingDateController@create')->name('sailings.create');
        Route::post('/sailings/store', 'SailingDateController@store')->name('sailings.store');
        Route::get('/sailings/{sailing}/edit', 'SailingDateController@edit')->name('sailings.edit');
        Route::put('/sailings/{sailing}/update', 'SailingDateController@update')->name('sailings.update');
        Route::delete('/sailings/{sailing}/destroy', 'SailingDateController@destroy')->name('sailings.destroy');
    
        //Role
        Route::get('/accounts/roles', 'AccountController@role_list')->name('roles.list');
        Route::get('/accounts/roles/create', 'AccountController@role_create')->name('roles.create');
        Route::post('/accounts/roles/store', 'AccountController@role_store')->name('roles.store');
        Route::get('/accounts/roles/{role}/edit', 'AccountController@role_edit')->name('roles.edit');
        Route::put('/accounts/roles/{role}/update', 'AccountController@role_update')->name('roles.update');
        //staff user sub admin
        Route::get('/accounts/admins', 'AccountController@admin_list')->name('admins.list');
        Route::get('/accounts/admins/create', 'AccountController@admin_create')->name('admins.create');
        Route::post('/accounts/admins/store', 'AccountController@admin_store')->name('admins.store');
        Route::get('/accounts/admins/{admin}/edit', 'AccountController@admin_edit')->name('admins.edit');
        Route::put('/accounts/admins/{admin}/update', 'AccountController@admin_update')->name('admins.update');
        //normal user customers
        Route::get('/accounts/customers', 'AccountController@customer_list')->name('customers.list');
        Route::get('/accounts/customers/create', 'AccountController@customer_create')->name('customers.create');
        Route::post('/accounts/customers/store', 'AccountController@customer_store')->name('customers.store');
        Route::get('/accounts/customers/{user}/edit', 'AccountController@customer_edit')->name('customers.edit');
        Route::put('/accounts/customers/{user}/update', 'AccountController@customer_update')->name('customers.update');
    });
});


Auth::routes();
