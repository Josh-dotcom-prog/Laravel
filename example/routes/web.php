<?php

use Illuminate\Support\Facades\Route;
use illuminate\Support\Arr;
use App\Models\Job;

Route::get('/', function () {
    return view('index');
});

//Retrieves all jobs from the database
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//Creat jobs
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//Finds Job by id
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});


Route::post('/jobs', function () {
    // Validate the request data
    request()->validate([
        'title' => 'required|min:3',
        'salary' => 'required',
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});


Route::get('/contact', function () {
    return view('contact');
});
