<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
        if (Auth::guest()) {
            return redirect('/login');
        }

        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        Job::create($attributes + [
            'employer_id' => 1
        ]);

        return redirect('/jobs');
    }

    public function create()
    {
        if (Auth::guest()) {
            return redirect('/login');
        }

        return view('jobs.create');
    }

    public function update(Job $job)
    {
        if (Auth::guest()) {
            return redirect('/login');
        }

        Gate::authorize('edit-job', $job);
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
        if (Auth::guest()) {
            return redirect('/login');
        }

        Gate::authorize('edit-job', $job);
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
        if (Auth::guest()) {
            return redirect('/login');
        }

        Gate::authorize('edit-job', $job);
        return view('jobs.edit', [
            'job' => $job
        ]);
    }
}
