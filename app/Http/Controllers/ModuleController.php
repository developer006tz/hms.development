<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Module::class);

        $search = $request->get('search', '');

        $modules = Module::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.modules.index', compact('modules', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Module::class);

        return view('app.modules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Module::class);

        $validated = $request->validate([
            'module_name' => ['required', 'max:255', 'string'],
            'table_id' => ['required', 'max:255'],
            'table_name' => ['nullable', 'max:255', 'string'],
        ]);

        $module = Module::create($validated);

        return redirect()
            ->route('modules.edit', $module)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Module $module): View
    {
        $this->authorize('view', $module);

        return view('app.modules.show', compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Module $module): View
    {
        $this->authorize('update', $module);

        return view('app.modules.edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Module $module): RedirectResponse
    {
        $this->authorize('update', $module);

        $validated = $request->validate([
            'module_name' => ['required', 'max:255', 'string'],
            'table_id' => ['required', 'max:255'],
            'table_name' => ['nullable', 'max:255', 'string'],
        ]);

        $module->update($validated);

        return redirect()
            ->route('modules.edit', $module)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Module $module): RedirectResponse
    {
        $this->authorize('delete', $module);

        $module->delete();

        return redirect()
            ->route('modules.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
