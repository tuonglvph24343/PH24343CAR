<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'cars.';
    public function index()
    {
        $data = Car::query()->latest('id')->paginate(5);
        return view(self::PATH_VIEW . __FUNCTION__ , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__ );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Car::query()->create($request->all());
        return back()->with('msg','success');
    }


    public function edit(Car $car)
    {
        return view(self::PATH_VIEW . __FUNCTION__ ,compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $car->update($request->all());
        return back()->with('msg','success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return back()->with('msg','success');
    }
}
