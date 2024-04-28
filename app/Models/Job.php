<?php
namespace App\Models;
use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return  [
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
    }

    public static function find($id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(!$job){
            abort(404);
        }

        return $job;
    }
}
?>