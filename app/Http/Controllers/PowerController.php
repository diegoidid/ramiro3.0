<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Power;
use App\Http\Resources\PowerResource;
use App\Http\Resources\SystemResource;
use App\Http\Resources\HeroResource;
use App\Http\Resources\PlanetResource;
use App\Providers\ApiResponse;

class PowerController extends Controller
{

    use ApiResponse;


    /**
     * 
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Power::all();
        return $this->apiResponse(PowerResource::collection($data), 'Powers traidos successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validated();
        $power = Power::create($data);
        return $this->apiResponse(new PowerResource($power), 'Power created successfully', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Power::findOrFail($id);
        return $this->apiResponse(new PowerResource($data), 'Power retrieved successfully', 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
