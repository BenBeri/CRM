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

use Illuminate\Support\Facades\Route;

Route::get('/',  array('uses' => 'HomeController@index'));
Route::get('/leads',  array('uses' => 'HomeController@leads'));
Route::get('/customers',  array('uses' => 'HomeController@customers'))->name("customers");

/**
 * Authentication
 */
Route::get('/login',  array('uses' => 'Auth\\LoginController@index'))->name("auth.login.view");
Route::delete('/logout',  array('uses' => 'Auth\\LoginController@logout'))->name("auth.logout");

Route::post('login', array('uses' => 'Auth\\LoginController@login'));

Route::post('/people/{id}/update-status', array("uses" => "HomeController@updateStatus"))->name("people.update.status");
Route::get('/people/{id}/edit', array("uses" => "HomeController@edit"))->name("people.edit");
Route::get('/people/{id}/delete', array("uses" => "HomeController@delete"))->name("people.delete");