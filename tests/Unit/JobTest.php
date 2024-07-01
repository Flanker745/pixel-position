<?php
namespace Tests\Unit;

use App\Models\Employer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Job;
use App\Models\Tag;

class JobTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
    }

    public function test_it_belongs_to_an_employer()
    {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);
        expect($job->employer->is($employer))->toBeTrue();
    }
    public function test_it_can_have_tag()
    {
        $job = Job::factory()->create();
        $job->tag("Frontend");
        expect($job->tags)->toHaveCount(1);
    }
    
};
