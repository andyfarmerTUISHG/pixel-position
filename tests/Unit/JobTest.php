<?php

use App\Models\Employer;
use App\Models\Jobs;

it('belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $job = Jobs::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();
});
