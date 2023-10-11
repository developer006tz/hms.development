<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Package::class);

        $search = $request->get('search', '');

        $packages = Package::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.packages.index', compact('packages', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Package::class);

        return view('app.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Package::class);

        $validated = $request->validate([
            'package_name' => ['required', 'max:255', 'string'],
            'package_description' => ['nullable', 'max:255', 'string'],
            'package_mountly_fee' => ['nullable', 'numeric'],
            'package_year_fee' => ['nullable', 'numeric'],
        ]);

        $package = Package::create($validated);

        return redirect()
            ->route('packages.edit', $package)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Package $package): View
    {
        $this->authorize('view', $package);

        return view('app.packages.show', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Package $package): View
    {
        $this->authorize('update', $package);

        return view('app.packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package): RedirectResponse
    {
        $this->authorize('update', $package);

        $validated = $request->validate([
            'package_name' => ['required', 'max:255', 'string'],
            'package_description' => ['nullable', 'max:255', 'string'],
            'package_mountly_fee' => ['nullable', 'numeric'],
            'package_year_fee' => ['nullable', 'numeric'],
        ]);

        $package->update($validated);

        return redirect()
            ->route('packages.edit', $package)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Package $package
    ): RedirectResponse {
        $this->authorize('delete', $package);

        $package->delete();

        return redirect()
            ->route('packages.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
