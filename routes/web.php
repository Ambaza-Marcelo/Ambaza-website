<?php


Route::get('/', 'WelcomeController@home')->name('home');


Route::get('/welcome-page','WelcomeController@home')->name('welcome-page');

Route::post('site/subscribe','WelcomeController@subscribe')
        ->name('site.subscribe');
Route::get('/faq', 'WelcomeController@faq')->name('site.faq_view');

Route::get('/gallery', 'WelcomeController@gallery')->name('site.gallery_view');
Route::get('/contact-us', 'WelcomeController@contactUs')->name('site.contact_us_view');
Route::post('/contact-us', 'WelcomeController@contactUs')->name('site.contact_us_form');

Route::get('about-us','WelcomeController@about');

Route::get('blog','WelcomeController@blog');
Route::get('services','WelcomeController@service');
Route::get('elements','WelcomeController@gallery');


Route::get('contact-us',function(){
    return view('frontend.contact_us');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function () {
    Route::get('user/config/change_password', 'UserController@changePasswordGet');
    Route::post('user/config/change_password', 'UserController@changePasswordPost');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/settings', 'SettingController@index')->name('settings.index');
    Route::get('admin/images','FileController@create');
    Route::post('file','FileController@store');

    //site web routes
     
    Route::get('/site/dashboard', 'SiteController@dashboard')
        ->name('site.dashboard');
    Route::get('sliders/index','SliderController@index')
        ->name('sliders.index');
    Route::get('sliders/create','SliderController@create')
        ->name('sliders.create');
    Route::post('sliders/store','SliderController@store')
        ->name('sliders.store');
    Route::get('sliders/edit/{id}','SliderController@edit')
        ->name('sliders.edit');
    Route::put('sliders/update/{id}','SliderController@update')
        ->name('sliders.update');
    Route::delete('sliders/destroy/{id}','SliderController@destroy')
        ->name('sliders.destroy');
    Route::get('site/service','SiteController@serviceContent')
        ->name('site.service');
    Route::post('site/service','SiteController@serviceContent')
        ->name('site.service');


    Route::get('site/subscribe','SiteController@subscribe')
        ->name('site.subscribe');
    Route::get('site/gallery','SiteController@gallery')
        ->name('site.gallery');
    Route::get('site/gallery/add-image','SiteController@galleryAdd')
        ->name('site.gallery_image');
    Route::post('site/gallery/add-image','SiteController@galleryAdd')
        ->name('site.gallery_image');
    Route::delete('site/gallery/delete-images/{id}','SiteController@galleryDelete')
        ->name('site.gallery_image_delete');
    Route::get('site/contact-us','SiteController@contactUs')
        ->name('site.contact_us');
    Route::post('site/contact-us','SiteController@contactUs')
        ->name('site.contact_us');
    Route::get('site/fqa','SiteController@faq')
        ->name('site.faq');
    Route::post('site/fqa','SiteController@faq')
        ->name('site.faq');
    Route::post('site/faq/{id}','SiteController@faqDelete')
        ->name('site.faq_delete');
    Route::get('site/settings','SiteController@settings')
        ->name('site.settings');
    Route::post('site/settings','SiteController@settings')
        ->name('site.settings');
    
    Route::get('events/index','EventController@index')->name('events.index');
    Route::get('events/create','EventController@create')->name('events.create');
    Route::get('events/edit/{id}','EventController@edit')->name('events.edit');
    Route::post('events/store','EventController@store')->name('events.store');
    Route::put('events/update/{id}','EventController@update')->name('events.update');
    Route::delete('events/destroy/{id}','EventController@destroy')->name('events.destroy');

    Route::resource('point-keys','PointKeyController');

    Route::get('admin/news/list','NewsController@index')->name('admin-news-list');
    Route::get('admin/news/create','NewsController@create')->name('admin-news-create');
    Route::get('admin/news/edit/{id}','NewsController@edit')->name('admin-news-edit');
    Route::post('admin/news/store','NewsController@store')->name('admin-news-store');
    Route::put('admin/news/update/{id}','NewsController@update')->name('admin-news-update');
    Route::delete('admin/news/destroy/{id}','NewsController@destroy')->name('admin-news-destroy');

    Route::get('admin/post/list','PostController@index')->name('admin-post-list');
    Route::get('admin/post/create','PostController@create')->name('admin-post-create');
    Route::get('admin/post/edit/{id}','PostController@edit')->name('admin-post-edit');
    Route::post('admin/post/store','PostController@store')->name('admin-post-store');
    Route::put('admin/post/update/{id}','PostController@update')->name('admin-post-update');
    Route::delete('admin/post/destroy/{id}','PostController@destroy')->name('admin-post-destroy');

    Route::get('admin/encourage/list','EncourageController@index')->name('admin-encourage-list');
    Route::get('admin/encourage/create','EncourageController@create')->name('admin-encourage-create');
    Route::get('admin/encourage/edit/{id}','EncourageController@edit')->name('admin-encourage-edit');
    Route::post('admin/encourage/store','EncourageController@store')->name('admin-encourage-store');
    Route::put('admin/encourage/update/{id}','EncourageController@update')->name('admin-encourage-update');
    Route::delete('admin/encourage/destroy/{id}','EncourageController@destroy')->name('admin-encourage-destroy');

    Route::get('admin/service/list','ServiceController@index')->name('admin-service-list');
    Route::get('admin/service/create','ServiceController@create')->name('admin-service-create');
    Route::get('admin/service/edit/{id}','ServiceController@edit')->name('admin-service-edit');
    Route::post('admin/service/store','ServiceController@store')->name('admin-service-store');
    Route::put('admin/service/update/{id}','ServiceController@update')->name('admin-service-update');
    Route::delete('admin/service/destroy/{id}','ServiceController@destroy')->name('admin-service-destroy');

    Route::get('admin/about/list','AboutController@index')->name('admin-about-list');
    Route::get('admin/about/create','AboutController@create')->name('admin-about-create');
    Route::get('admin/about/edit/{id}','AboutController@edit')->name('admin-about-edit');
    Route::post('admin/about/store','AboutController@store')->name('admin-about-store');
    Route::put('admin/about/update/{id}','AboutController@update')->name('admin-about-update');
    Route::delete('admin/about/destroy/{id}','AboutController@destroy')->name('admin-about-destroy');



    //caissier 
    Route::get('register/accountant', function () {
        session([
        'register_role' => 'accountant',
        ]);

        return redirect()->route('register');
    });

    Route::post('register/accountant', 'UserController@storeAccountant');

    //technician

    Route::get('register/technician', function () {
        session([
        'register_role' => 'technician',
        ]);

        return redirect()->route('register');
    });

    Route::post('register/technician','UserController@storeTechnician');
  
});



//auth technician
Route::middleware(['auth', 'technician'])->group(function () {
    
});


// View Emails - in browser
Route::prefix('emails')->group(function () {
    // Welcome Email
    Route::get('/welcome', function () {
        $user = App\User::find(1);
        $password = 'martial';

        return new App\Mail\SendWelcomeEmailToUser($user, $password);
    });
});

