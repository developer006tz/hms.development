<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\SuperAdmin;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserSuperAdminsTest extends TestCase
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
    public function it_gets_user_super_admins(): void
    {
        $user = User::factory()->create();
        $superAdmins = SuperAdmin::factory()
            ->count(2)
            ->create([
                'user_id' => $user->id,
            ]);

        $response = $this->getJson(
            route('api.users.super-admins.index', $user)
        );

        $response->assertOk()->assertSee($superAdmins[0]->firstname);
    }

    /**
     * @test
     */
    public function it_stores_the_user_super_admins(): void
    {
        $user = User::factory()->create();
        $data = SuperAdmin::factory()
            ->make([
                'user_id' => $user->id,
            ])
            ->toArray();
        $data['password'] = \Str::random('8');

        $response = $this->postJson(
            route('api.users.super-admins.store', $user),
            $data
        );

        unset($data['password']);
        unset($data['phonenumber_two']);
        unset($data['phonenumber_three']);
        unset($data['address']);

        $this->assertDatabaseHas('super_admins', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $superAdmin = SuperAdmin::latest('id')->first();

        $this->assertEquals($user->id, $superAdmin->user_id);
    }
}
