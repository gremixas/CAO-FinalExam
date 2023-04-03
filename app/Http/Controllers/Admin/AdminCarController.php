<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class AdminCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'engine' => 'required',
            'transmission' => 'required',
            'price' => 'required',
        ]);
        Car::customCreate($request);
        return to_route('admin.cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return to_route('admin.cars.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        // dd($request->all());
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'engine' => 'required',
            'transmission' => 'required',
            'price' => 'required',
        ]);
        $car->customUpdate($request);
        return to_route('admin.cars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return response()->json(['success' => true]);
    }
}
