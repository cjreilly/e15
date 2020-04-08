<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return '<html><head><title>Request by Proxy</title></head><body><p>The Internet Nodegraph Service is
    <i>here</i>.</p></body></html>';
});
Route::get('/debug', function() {
    $debug=['Environment'=>App::environment()];
    try {
        $tables = DB::Select('show tables;');
        $debug['Database connection test']='PASSED';
        $debug['tables']=array_column($tables,'Tables');
    } catch (Exception $e) {
        $debug['Database connection test']='FAILED: '.$e->getMessage();
    }
    dump($debug);
});
