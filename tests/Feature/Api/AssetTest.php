<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Asset;

use App\Models\Hospital;
use App\Models\AssetType;
use App\Models\AssetCategory;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AssetTest extends TestCase
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
    public function it_gets_assets_list(): void
    {
        $assets = Asset::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.assets.index'));

        $response->assertOk()->assertSee($assets[0]->asset_no);
    }

    /**
     * @test
     */
    public function it_stores_the_asset(): void
    {
        $data = Asset::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.assets.store'), $data);

        $this->assertDatabaseHas('assets', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_asset(): void
    {
        $asset = Asset::factory()->create();

        $hospital = Hospital::factory()->create();
        $assetType = AssetType::factory()->create();
        $assetCategory = AssetCategory::factory()->create();

        $data = [
            'asset_no' => $this->faker->text(255),
            'asset_name' => $this->faker->text(255),
            'asset_purchase_date' => $this->faker->date(),
            'asset_purchase_cost' => $this->faker->randomNumber(1),
            'asset_current_value' => $this->faker->randomNumber(1),
            'asset_manufacture' => $this->faker->text(255),
            'asset_startdate_warant' => $this->faker->date(),
            'asset_enddate_warant' => $this->faker->date(),
            'asset_description' => $this->faker->text(255),
            'asset_type_id' => $this->faker->randomNumber(),
            'asset_category_id' => $this->faker->randomNumber(),
            'asset_status' => 'in use',
            'hospital_id' => $this->faker->randomNumber(),
            'hospital_id' => $hospital->id,
            'asset_type_id' => $assetType->id,
            'asset_category_id' => $assetCategory->id,
        ];

        $response = $this->putJson(route('api.assets.update', $asset), $data);

        $data['id'] = $asset->id;

        $this->assertDatabaseHas('assets', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_asset(): void
    {
        $asset = Asset::factory()->create();

        $response = $this->deleteJson(route('api.assets.destroy', $asset));

        $this->assertModelMissing($asset);

        $response->assertNoContent();
    }
}
