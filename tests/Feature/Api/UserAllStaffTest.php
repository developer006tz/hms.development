<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Staff;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserAllStaffTest extends TestCase
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
    public function it_gets_user_all_staff(): void
    {
        $user = User::factory()->create();
        $allStaff = Staff::factory()
            ->count(2)
            ->create([
                'user_id' => $user->id,
            ]);

        $response = $this->getJson(route('api.users.all-staff.index', $user));

        $response->assertOk()->assertSee($allStaff[0]->staff_no);
    }

    /**
     * @test
     */
    public function it_stores_the_user_all_staff(): void
    {
        $user = User::factory()->create();
        $data = Staff::factory()
            ->make([
                'user_id' => $user->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.users.all-staff.store', $user),
            $data
        );

        $this->assertDatabaseHas('staffs', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $staff = Staff::latest('id')->first();

        $this->assertEquals($user->id, $staff->user_id);
    }
}
