<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Assignment;

use App\Models\Asset;
use App\Models\Staff;
use App\Models\Hospital;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AssignmentTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'admin@admin.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_assignments_list(): void
    {
        $assignments = Assignment::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.assignments.index'));

        $response->assertOk()->assertSee($assignments[0]->assignment_date);
    }

    /**
     * @test
     */
    public function it_stores_the_assignment(): void
    {
        $data = Assignment::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.assignments.store'), $data);

        $this->assertDatabaseHas('assignments', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_assignment(): void
    {
        $assignment = Assignment::factory()->create();

        $asset = Asset::factory()->create();
        $staff = Staff::factory()->create();
        $hospital = Hospital::factory()->create();

        $data = [
            'asset_id' => $this->faker->randomNumber(),
            'staff_id' => $this->faker->randomNumber(),
            'assignment_date' => $this->faker->date(),
            'assignment_return_date' => $this->faker->date(),
            'assignment_condition' => 'good',
            'assignment_usage_history' => $this->faker->text(255),
            'assignment_description' => $this->faker->text(),
            'hospital_id' => $this->faker->randomNumber(),
            'asset_id' => $asset->id,
            'staff_id' => $staff->id,
            'hospital_id' => $hospital->id,
        ];

        $response = $this->putJson(
            route('api.assignments.update', $assignment),
            $data
        );

        $data['id'] = $assignment->id;

        $this->assertDatabaseHas('assignments', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_assignment(): void
    {
        $assignment = Assignment::factory()->create();

        $response = $this->deleteJson(
            route('api.assignments.destroy', $assignment)
        );

        $this->assertModelMissing($assignment);

        $response->assertNoContent();
    }
}
