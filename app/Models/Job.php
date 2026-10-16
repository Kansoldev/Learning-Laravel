<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job {
    public static function all():array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ]
        ];
    }

    public static function find(int $id):array
    {
        /*
            Get the job that matches the `id` passed in the url.
            
            `static::methodName()` means call a specific static method in the current class. e.g
            static::all() means call the all() static method in the current class which is `Job`

            Remember: I can use any method declared as `static` directly from the class
            without having to instantiate it
        */
        $job = Arr::first(static::all(), fn($job) => $job['id'] === $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}