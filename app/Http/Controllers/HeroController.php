<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Http\Requests\HeroRequest;
use App\Http\Resources\HeroResource;
use App\Http\Resources\PlanetResource;
use App\Http\Resources\SystemResource;
use App\Http\Resources\PowerResource;
use App\Providers\ApiResponse;


class HeroController extends Controller
{


    use ApiResponse;
    /**
     * 
     * 
     * Display a listing of the resource.
     */
    public function index()
    {
        $heros = Hero::With('planet', 'powers')->get();

        return $this->apiResponse(HeroResource::collection($heros), 'Heros retrieved successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HeroRequest $request)
    {
        $data = $request->validated();
        $hero = Hero::create($data);
        return $this->apiResponse(new HeroResource($hero), 'Hero created successfully', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Hero::with('planet', 'powers', 'system')->findOrFail($id);
        return $this->apiResponse(new HeroResource($data), 'Hero retrieved successfully', 200);
        
    }

    /**
     * Update the specified resource in storage.
     */

    /*
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    /*
    public function destroy(string $id)
    {
        //
    }
}
/*


*/
}