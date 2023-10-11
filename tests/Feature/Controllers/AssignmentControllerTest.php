<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Assignment;

use App\Models\Asset;
use App\Models\Staff;
use App\Models\Hospital;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AssignmentControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_assignments(): void
    {
        $assignments = Assignment::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('assignments.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.assignments.index')
            ->assertViewHas('assignments');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_assignment(): void
    {
        $response = $this->get(route('assignments.create'));

        $response->assertOk()->assertViewIs('app.assignments.create');
    }

    /**
     * @test
     */
    public function it_stores_the_assignment(): void
    {
        $data = Assignment::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('assignments.store'), $data);

        $this->assertDatabaseHas('assignments', $data);

        $assignment = Assignment::latest('id')->first();

        $response->assertRedirect(route('assignments.edit', $assignment));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_assignment(): void
    {
        $assignment = Assignment::factory()->create();

        $response = $this->get(route('assignments.show', $assignment));

        $response
            ->assertOk()
            ->assertViewIs('app.assignments.show')
            ->assertViewHas('assignment');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_assignment(): void
    {
        $assignment = Assignment::factory()->create();

        $response = $this->get(route('assignments.edit', $assignment));

        $response
            ->assertOk()
            ->assertViewIs('app.assignments.edit')
            ->assertViewHas('assignment');
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

        $response = $this->put(route('assignments.update', $assignment), $data);

        $data['id'] = $assignment->id;

        $this->assertDatabaseHas('assignments', $data);

        $response->assertRedirect(route('assignments.edit', $assignment));
    }

    /**
     * @test
     */
    public function it_deletes_the_assignment(): void
    {
        $assignment = Assignment::factory()->create();

        $response = $this->delete(route('assignments.destroy', $assignment));

        $response->assertRedirect(route('assignments.index'));

        $this->assertModelMissing($assignment);
    }
}
