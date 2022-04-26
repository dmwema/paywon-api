<?php

/** @var \Laravel\Lumen\Routing\Router $router */


use App\Http\Controllers\AddressController;
use App\Http\Controllers\CreditCardController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\TransfertController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

// All routes for Models/Address
$router->get('/address',[AddressController::class,'index']);
$router->post('/address',[AddressController::class,'store']);
$router->get('/address/{id}',[AddressController::class,'show']);
$router->post('/address/update',[AddressController::class,'update']);
$router->delete('/address/{id}',[AddressController::class,'destroy']);
// All routes for Models/CreditCard
$router->get('/credit_card',[CreditCardController::class,'index']);
$router->post('/credit_card',[CreditCardController::class,'store']);
$router->get('/credit_card/{id}',[CreditCardController::class,'show']);
$router->post('/credit_card/update',[CreditCardController::class,'update']);
$router->delete('/credit_card/{id}',[CreditCardController::class,'destroy']);
// All routes for Models/Person
$router->get('/person',[PersonController::class,'index']);
$router->post('/person',[PersonController::class,'store']);
$router->get('/person/{id}',[PersonController::class,'show']);
$router->post('/person/update',[PersonController::class,'update']);
$router->delete('/person/{id}',[PersonController::class,'destroy']);
// All routes for Models/Phone
$router->get('/phone',[PhoneController::class,'index']);
$router->post('/phone',[PhoneController::class,'store']);
$router->get('/phone/{id}',[PhoneController::class,'show']);
$router->post('/phone/update',[PhoneController::class,'update']);
$router->delete('/phone/{id}',[PhoneController::class,'destroy']);
// All routes for Models/Transfert
$router->get('/transfert',[TransfertController::class,'index']);
$router->post('/transfert',[TransfertController::class,'store']);
$router->get('/transfert/{id}',[TransfertController::class,'show']);
$router->post('/transfert/update',[TransfertController::class,'update']);
$router->delete('/transfert/{id}',[TransfertController::class,'destroy']);
// All routes for Models/User
$router->get('/user',[UserController::class,'index']);
$router->post('/user',[UserController::class,'store']);
$router->get('/user/{id}',[UserController::class,'show']);
$router->post('/user/update',[UserController::class,'update']);
$router->delete('/user/{id}',[UserController::class,'destroy']);

$router->get('/', function () use ($router) {
    echo "<center> Paywon </center>";
});

Route::group(['prefix' => 'api'], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('user-profile', 'AuthController@me');

});
