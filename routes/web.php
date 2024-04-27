<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Junior Developer',
                'salary' => '$60000'
            ],
            [
                'id' => 2,
                'title' => 'Senior Developer',
                'salary' => '$80000'
            ],
            [
                'id' => 3,
                'title' => 'Manager',
                'salary' => '$100000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Junior Developer',
            'salary' => '$60000'
        ],
        [
            'id' => 2,
            'title' => 'Senior Developer',
            'salary' => '$80000'
        ],
        [
            'id' => 3,
            'title' => 'Manager',
            'salary' => '$100000'
        ]
    ];

    $filteredJob = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', [
        'job' => $filteredJob
    ]);
});
