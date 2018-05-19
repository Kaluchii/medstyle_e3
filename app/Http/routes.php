<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','FrontController@getIndex');
Route::get('/full','FrontController@getFull');

Route::get('/about','FrontController@getAbout');

Route::get('/problems/{slug}','FrontController@getProblems');
Route::get('/specials/{slug}','FrontController@getSpecial');

Route::get('/specialists','FrontController@getSpecialists');
Route::get('/specialist/{slug}','FrontController@getSpecialist');

Route::get('/services', 'FrontController@getServices');
Route::get('/service/{slug}', 'FrontController@getService');

Route::get('/technology', 'FrontController@getTechnologys');
Route::get('/technology/{slug}', 'FrontController@getTechnology');

Route::get('/helpful', 'FrontController@getPoleznoes');
Route::get('/helpful/{slug}', 'FrontController@getPoleznoe');

Route::get('/news', 'FrontController@getNews');
Route::get('/news/{slug}', 'FrontController@getNew');

Route::get('/questions', 'FrontController@getQuestions');
Route::get('/questions/{slug}', 'FrontController@getQuestions_pr');

Route::get('/video', 'FrontController@getVideos');

Route::get('/contacts', 'FrontController@getContacts');


Route::get('/age', 'TestController@selectAge');
Route::get('/test/{id}', 'TestController@getTest');
Route::get('/result/{page}', 'TestController@getResult');
Route::get('/no-result', 'TestController@noResult');





Route::post('/captcha',          'Back\MailController@Captcha');
Route::post('/feedback/mail',    'Back\MailController@send');


Route::auth();
Route::group(['middleware' => 'auth', 'prefix' => 'adm'],function(){

    Route::get('/',         'AdminController@getIndex');


    Route::get('/all',                      'AdminController@getAll');
    Route::get('/meta',                     'AdminController@getMeta');
    Route::get('/slider',                   'AdminController@getSlider');
    Route::get('/about',                    'AdminController@getAbout');
    Route::get('/specialists',              'AdminController@getSpec');
    Route::get('/specialists/{id}',         'AdminController@getSpecItem');
    Route::get('/services',                 'AdminController@getServices');
    Route::get('/services/{id}',            'AdminController@getServicesCat');
    Route::get('/services/{cat_id}/{id}',   'AdminController@getServicesItem');
    Route::get('/technologies',             'AdminController@getTechnologies');
    Route::get('/technologies/{id}',        'AdminController@getTechnologiesItem');
    Route::get('/helpful',                  'AdminController@getHelpful');
    Route::get('/helpful/{id}',             'AdminController@getHelpfulItem');
    Route::get('/problems',                 'AdminController@getProblems');
    Route::get('/questions',                'AdminController@getQuestions');
    Route::get('/questions/{id}',           'AdminController@getQuestionsItem');
    Route::get('/stocks',                   'AdminController@getStocks');
    Route::get('/stocks/{id}',              'AdminController@getStocksItem');
    Route::get('/videos',                   'AdminController@getVideos');
    Route::get('/contacts',                 'AdminController@getContacts');
    Route::get('/test',                     'AdminController@getTest');
    Route::get('/test/{id}',                'AdminController@getTestCategory');
    Route::get('/test/{cat}/{id}',          'AdminController@getTestItem');
    Route::get('/post',                     'AdminController@getPost');



    // Таксономия проекта. Визуальная зависимость данных.
    Route::get('/taxonomy', 'Back\TaxonomyController@showTaxonomy');

    // Служебные роуты
    Route::post('/save', 'Back\SaveController@save');

    // Создание нового элемента группы
    Route::post('/newItemRow', 'Back\GroupItemController@newRow');
    Route::post('/newItemBox', 'Back\GroupItemController@newBox');
    Route::post('/newImage', 'Back\GroupItemController@newImageItem');

    // Роут удаление элемента группы
    Route::post('/removeItem', 'Back\GroupItemController@removeItem');
});

