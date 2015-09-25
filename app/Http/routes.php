<?php

Route::get('/', [
    'as'   => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('/catalogo-lusso', [
    'as'   => 'catalog.lusso',
    'uses' => 'CatalogController@catalog_lusso'
]);

Route::get('/catalogo-firori', [
    'as'   => 'catalog.fiori',
    'uses' => 'CatalogController@catalog_fiori'
]);

Route::get('/catalogo', [
    'as'   => 'catalog',
    'uses' => 'CatalogController@index'
]);

Route::post('/order', [
    'as'   => 'order',
    'uses' => 'ShopController@index'
]);

Route::get('/details-item/{id}', [
    'as'   => 'details.item',
    'uses' => 'CatalogController@details'
]);

Route::post('/email', [
    'as'   => 'contact.email',
    'uses' => 'ShopController@email'
]);




