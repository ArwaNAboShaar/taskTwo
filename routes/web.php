<?php

use Carbon\Factory;
use Illuminate\Console\View\Components\Factory as ComponentsFactory;
use Illuminate\Support\Facades\Route;


Route::get('/',  function () {
    return view('welcome');
});

Route::get('/about',  function () {
    $name = 'Badran';
    $d = [
        1 => 'Technical',
        2 => 'Financial',
        3 => 'sales'
    ];

    return view('about', ['name' => $name, 'd' => $d]);
    // return view('about')->with('name', $name);
    // return view(view: 'about', data: compact(var_name: 'name'));
});

Route::post('/about',  function () {
    $name = $_POST['name'];
    $d = [
        1 => 'Technical',
        2 => 'Financial',
        3 => 'sales'
    ];
    return view('about', ['name' => $name, 'd' => $d]);
    // return view('about', ['name' => $name]);
    // return view('about')->with('name', $name);
    // return view(view: 'about', data: compact(var_name: 'name'));
});
