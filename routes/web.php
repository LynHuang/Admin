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
//    return view('welcome');
    return app('Admin')->getFacadeAccessor();
});

Route::get('/test', function () {
    $data = [
        1 => ['id' => 1, 'parent_id' => '', 'data' => 'test1'],
        2 => ['id' => 2, 'parent_id' => '', 'data' => 'test2'],
        3 => ['id' => 3, 'parent_id' => 5, 'data' => 'test3'],
        4 => ['id' => 4, 'parent_id' => 3, 'data' => 'test1'],
        5 => ['id' => 5, 'parent_id' => '', 'data' => 'test1'],
        6 => ['id' => 6, 'parent_id' => 5, 'data' => 'test1'],
        7 => ['id' => 7, 'parent_id' => 3, 'data' => 'test1'],
    ];

    $tree = new \Lyn\Admin\Tree($data, 'parent_id');

    dump($tree);
});