<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;
use App\Http\Resources\PlanetResource;
use App\Http\Resources\SystemResource;
use App\Http\Resources\HeroResource;
use App\Http\Resources\PowerResource;
use App\Providers\ApiResponse;


class PlanetController extends Controller
{

use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $planets = Planet::with('system')->get();
       return $this->apiResponse(PlanetResource::collection($planets), 'Planets retrieved successfully', 200); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validated();
        $planet = Planet::create($data);
        return $this->apiResponse(new PlanetResource($planet), 'Planet created successfully', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Planet $planet)
    {
        $data = Planet::with('system')->findOrFail($planet->id);
        return $this->apiResponse(new PlanetResource($data), 'Planet retrieved successfully', 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Planet $planet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planet $planet)
    {
        //
    }
}
