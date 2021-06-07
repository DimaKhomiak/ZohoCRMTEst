<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\ZohoController;

use Illuminate\Support\Facades\Route;
//use zcrmsdk\crm\setup\restclient\ZCRMRestClient;

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

Route::get('/', [PageController::class, 'show']);


//------------------------------------------------------------------------------
Route::get('page/show', [PageController::class, 'show']);
Route::get('page/leads', [PageController::class, 'leads']);
Route::get('page/accounts', [PageController::class, 'accounts']);
Route::get('page/deals', [PageController::class, 'deals']);
Route::get('page/contacts', [PageController::class, 'contacts']);
Route::get('page/tasks', [PageController::class, 'tasks']);

Route::get('page/lead/{id}', [PageController::class, 'lead']);
Route::get('page/account/{id}', [PageController::class, 'account']);
Route::get('page/deal/{id}', [PageController::class, 'deal']);
Route::get('page/task/{id}', [PageController::class, 'task']);
Route::get('page/contact/{id}', [PageController::class, 'contact']);

Route::post('page/create_deal/{id}', [PageController::class, 'create_deal']);
Route::post('page/create_task', [PageController::class, 'create_task']);
Route::post('page/create_contact', [PageController::class, 'create_contact']);

Route::get('page/convert_lead_to_deal/{id}', [PageController::class, 'convert_lead_to_deal']);


//------------------------------------------------------------------------------
Route::get('zoho/refresh', [ZohoController::class, 'refresh']);
Route::get('zoho/insert', [ZohoController::class, 'insert']);
Route::get('zoho/get', [ZohoController::class, 'get']);
//------------------------------------------------------------------------------


