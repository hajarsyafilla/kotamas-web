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
if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', 'Web\HomeController@index');
Route::get('default', 'Web\HomeController@default');

Route::get('about', 'Web\AboutController@index');
Route::get('about/ceo-message', 'Web\AboutController@ceoMessage');
Route::get('about/history', 'Web\AboutController@history');
Route::get('about/achievement', 'Web\AboutController@achievement');
Route::get('about/subsidiary', 'Web\AboutController@subsidiary');
Route::get('about/internal-audit-committee', 'Web\AboutController@internalAuditCommittee');
Route::get('about/board-of-director', 'Web\AboutController@bod');
Route::get('about/state-committees/{zone_id?}', 'Web\AboutController@stateCommittee');
Route::get('about/personnels/{deparment_id?}', 'Web\AboutController@personnel');

Route::get('services/insurance/{subpage?}', 'Web\ServiceController@insurance');
Route::get('services/financing', 'Web\ServiceController@financing');
Route::get('services/ar-rahnu', 'Web\ServiceController@arrahnu');
Route::get('services/accommodation', 'Web\ServiceController@accommodation');
Route::get('services/trading', 'Web\ServiceController@trading');
Route::get('services/travel', 'Web\ServiceController@travel');
Route::get('services/ccdkeanggotaan', 'Web\ServiceController@ccdkeanggotaan');
Route::get('services/senaraiharga', 'Web\ServiceController@senaraiharga');


Route::get('news', 'Web\NewsController@index');
Route::get('news/{news_id}/view', 'Web\NewsController@view');

Route::get('contact-us', 'Web\HomeController@contactUs');
Route::get('contact-us/ar-rahnu-xchange', 'Web\HomeController@contactUsArRahnu');

Route::get('downloads', 'Web\HomeController@downloads');

Route::get('privacy-policy', 'Web\HomeController@privacyPolicy');
Route::get('disclaimer', 'Web\HomeController@disclaimer');

Route::get('/503', function() {
    return view('web.under_construction');
});

Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@index']);
Route::post('login', 'Auth\LoginController@authenticate');

Route::group(['middleware' => 'auth'], function () {

    Route::get('admin', function() {
        return redirect(action('Admin\HomeController@index'));
    });

    Route::group(['prefix' => 'webmin', 'namespace' => 'Admin'], function () {
        Route::get('/', 'HomeController@index');

        Route::any('landing-poster/delete', 'HomeController@deleteLandingPoster');
        Route::any('landing-poster', 'HomeController@editLandingPoster');

        Route::get('news', 'NewsController@index');
        Route::any('news/add', 'NewsController@add');
        Route::any('news/{news_id}/edit', 'NewsController@edit');
        Route::get('news/{news_id}/delete', 'NewsController@delete');

        Route::get('state-committees', 'StateCommitteeController@index');
        Route::any('state-committees/add', 'StateCommitteeController@add');
        Route::any('state-committees/{sc_id}/edit', 'StateCommitteeController@edit');
        Route::get('state-committees/{sc_id}/delete', 'StateCommitteeController@delete');

        Route::get('downloads', 'DownloadController@index');
        Route::any('downloads/add', 'DownloadController@add');
        Route::any('downloads/{download_id}/view', 'DownloadController@view');
        Route::any('downloads/{download_id}/edit', 'DownloadController@edit');
        Route::get('downloads/{download_id}/delete', 'DownloadController@delete');

        Route::get('banners', 'BannerController@index');
        Route::any('banners/add', 'BannerController@add');
        Route::any('banners/{banner_id}/edit', 'BannerController@edit');
        Route::get('banners/{banner_id}/delete', 'BannerController@delete');
        Route::get('banners/{banner_id}/sort/{direction}', 'BannerController@sort');

        Route::get('users', 'UserController@index');
        Route::any('users/add', 'UserController@add');
        Route::any('users/{user_id}/edit', 'UserController@edit');
        Route::get('users/{user_id}/delete', 'UserController@delete');
    });
});

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Route::group(['prefix' => 'dev'], function () {
});