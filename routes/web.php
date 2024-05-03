<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Http\RedirectResponse;

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

// INDEX
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->latest()->simplePaginate(10)
    ]);
});

// STORE
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

// CREATE
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// PATCH
Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs/' . $job->id);
});

// DELETE
Route::delete('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);
    $job->delete();

    return redirect('/jobs');
});

// SHOW
Route::get('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);

    return view('jobs.show', [
        'job' => $job
    ]);
});

// EDIT
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::findOrFail($id);

    return view('jobs.edit', [
        'job' => $job
    ]);
});
