<?php

use Illuminate\Support\Facades\Route;
use illuminate\Support\Arr;
use App\Models\Job;

Route::get('/', function () {
    return view('index');
});

//index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//Creat
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//Show
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

//Store
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

//edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

//Update
Route::patch('/jobs/{id}', function ($id) {
    //validate
    request()->validate([
        'title' => 'required|min:3',
        'salary' => 'required',
    ]);
    //authorize(on hold)

    //update job
    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    //redirect to the job page
    return redirect('/jobs/' . $job->id);
});

//Delete
Route::delete('/jobs/{id}', function ($id) {
    //authorize(on hold)

    //delete job
    Job::findOrFail($id)->delete();

    //redirect
    return redirect('/jobs')->with('message', 'Job deleted successfully!');
});

//Contact Page
Route::get('/contact', function () {
    return view('contact');
});
