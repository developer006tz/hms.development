<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Asset;

use App\Models\Hospital;
use App\Models\AssetType;
use App\Models\AssetCategory;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AssetControllerTest extends TestCase
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
    public function it_displays_index_view_with_assets(): void
    {
        $assets = Asset::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('assets.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.assets.index')
            ->assertViewHas('assets');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_asset(): void
    {
        $response = $this->get(route('assets.create'));

        $response->assertOk()->assertViewIs('app.assets.create');
    }

    /**
     * @test
     */
    public function it_stores_the_asset(): void
    {
        $data = Asset::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('assets.store'), $data);

        $this->assertDatabaseHas('assets', $data);

        $asset = Asset::latest('id')->first();

        $response->assertRedirect(route('assets.edit', $asset));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_asset(): void
    {
        $asset = Asset::factory()->create();

        $response = $this->get(route('assets.show', $asset));

        $response
            ->assertOk()
            ->assertViewIs('app.assets.show')
            ->assertViewHas('asset');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_asset(): void
    {
        $asset = Asset::factory()->create();

        $response = $this->get(route('assets.edit', $asset));

        $response
            ->assertOk()
            ->assertViewIs('app.assets.edit')
            ->assertViewHas('asset');
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

        $response = $this->put(route('assets.update', $asset), $data);

        $data['id'] = $asset->id;

        $this->assertDatabaseHas('assets', $data);

        $response->assertRedirect(route('assets.edit', $asset));
    }

    /**
     * @test
     */
    public function it_deletes_the_asset(): void
    {
        $asset = Asset::factory()->create();

        $response = $this->delete(route('assets.destroy', $asset));

        $response->assertRedirect(route('assets.index'));

        $this->assertModelMissing($asset);
    }
}
