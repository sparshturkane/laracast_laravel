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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/about', function () {
//     $tasks = DB::table('tasks')->get();
//     // return $tasks;
//     // $tasks = array('read','write','run','jump');
//     return view('about', compact('tasks'));
// });
Route::get('/tasks', function () {
    // $tasks = DB::table('tasks')->get();
    $tasks = App\Task::all();
    return view('task/all', compact('tasks'));
});
Route::get('/tasks/{id}', function ($id) {
    // dd($id);
    // $tasks = DB::table('tasks')->find($id);
    $tasks = App\Task::find($id);
    return view('task/one', compact('tasks'));
});
