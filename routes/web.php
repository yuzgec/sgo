<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/iletisim', [HomeController::class, 'contact'])->name('contactus');
Route::get('/kurumsal', [HomeController::class, 'corporate'])->name('corporate');
Route::get('/sayfa/{url}', [HomeController::class, 'corporatedetail'])->name('corporatedetail');
Route::get('/hizmetlerimiz', [HomeController::class, 'service'])->name('service');
Route::get('/projeler', [HomeController::class, 'project'])->name('project');
Route::get('/hizmet/{url}', [HomeController::class, 'servicedetail'])->name('servicedetail');
Route::get('/proje/{url}', [HomeController::class, 'projectdetail'])->name('projectdetail');
Route::get('/haberler', [HomeController::class, 'blog'])->name('blog');
Route::get('/haber/{url}', [HomeController::class, 'blogdetail'])->name('blogdetail');
Route::get('/sss', [HomeController::class, 'sss'])->name('sss');
Route::get('/video-galeri', [HomeController::class, 'video'])->name('video');
Route::post('/form', [HomeController::class, 'form'])->name('form');

Route::get('/referanslar', [HomeController::class, 'reference'])->name('reference');
Route::get('/projeler', [HomeController::class, 'project'])->name('project');


Route::group(["prefix"=>"go", 'middleware' => ['auth','web', 'admin']],function() {
    Route::get('/', 'DashboardController@index')->name('go');

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/formlar', 'DashboardController@formlar')->name('formlar');
    Route::delete('/formDelete/{id}', 'DashboardController@formDelete')->name('formDelete');
    Route::auto('/page', PageController::class);
    Route::auto('/page-categories', PageCategoryController::class);
    Route::auto('/blog', BlogController::class);
    Route::auto('/blog-categories', BlogCategoryController::class);
    Route::auto('/faq', FaqController::class);
    Route::auto('/faq-categories', FaqCategoryController::class);
    Route::auto('/gallery', GalleryController::class);
    Route::auto('/service', ServiceController::class);
    Route::auto('/service-categories', ServiceCategoryController::class);
    Route::auto('/gallery-categories', GalleryCategoryController::class);
    Route::auto('/slider', SliderController::class);
    Route::auto('/video', VideoController::class);
    Route::auto('/video-categories', VideoCategoryController::class);
    Route::auto('/settings', SettingController::class);
    Route::auto('/contact', ContactController::class);
    Route::auto('/features', FeaturesController::class);
    Route::auto('/reference', ReferenceController::class);
    Route::auto('/price', PriceController::class);

});

require __DIR__.'/auth.php';
