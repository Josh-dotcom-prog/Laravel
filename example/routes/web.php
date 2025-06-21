<?php

use Illuminate\Support\Facades\Route;
use illuminate\Support\Arr;
use App\Models\Job;

Route::get('/index', function () {
    return view('index');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});


Route::get('/contact', function () {
    return view('contact');
});
