<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\HospitalAdmin;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserHospitalAdminsTest extends TestCase
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
    public function it_gets_user_hospital_admins(): void
    {
        $user = User::factory()->create();
        $hospitalAdmins = HospitalAdmin::factory()
            ->count(2)
            ->create([
                'user_id' => $user->id,
            ]);

        $response = $this->getJson(
            route('api.users.hospital-admins.index', $user)
        );

        $response->assertOk()->assertSee($hospitalAdmins[0]->firstname);
    }

    /**
     * @test
     */
    public function it_stores_the_user_hospital_admins(): void
    {
        $user = User::factory()->create();
        $data = HospitalAdmin::factory()
            ->make([
                'user_id' => $user->id,
            ])
            ->toArray();
        $data['password'] = \Str::random('8');

        $response = $this->postJson(
            route('api.users.hospital-admins.store', $user),
            $data
        );

        unset($data['password']);

        $this->assertDatabaseHas('hospital_admins', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $hospitalAdmin = HospitalAdmin::latest('id')->first();

        $this->assertEquals($user->id, $hospitalAdmin->user_id);
    }
}
