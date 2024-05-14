<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::with('employer')->latest()->simplePaginate(10)
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job = Job::create($attributes + [
            'employer_id' => 1
        ]);

        Mail::to($job->employer->user)->send(new JobPosted($job));

        return redirect('/jobs');
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function update(Job $job)
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job->update($attributes + [
            'employer_id' => 1
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs');
    }

    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', [
            'job' => $job
        ]);
    }
}
