<?php

namespace App\Http\Controllers;

use App\Models\Provedor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProvedorRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProvedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $provedors = Provedor::paginate();

        return view('provedor.index', compact('provedors'))
            ->with('i', ($request->input('page', 1) - 1) * $provedors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $provedor = new Provedor();

        return view('provedor.create', compact('provedor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProvedorRequest $request): RedirectResponse
    {
        Provedor::create($request->validated());

        return Redirect::route('provedors.index')
            ->with('success', 'Provedor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $provedor = Provedor::find($id);

        return view('provedor.show', compact('provedor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $provedor = Provedor::find($id);

        return view('provedor.edit', compact('provedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProvedorRequest $request, Provedor $provedor): RedirectResponse
    {
        $provedor->update($request->validated());

        return Redirect::route('provedors.index')
            ->with('success', 'Provedor updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Provedor::find($id)->delete();

        return Redirect::route('provedors.index')
            ->with('success', 'Provedor deleted successfully');
    }
}
