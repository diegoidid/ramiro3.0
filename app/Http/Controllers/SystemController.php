<?php

namespace App\Http\Controllers;

use App\Models\System;
use Illuminate\Http\Request;
use App\Http\Requests\SystemRequest;
use App\Http\Resources\SystemResource;
use App\Providers\ApiResponse;


class SystemController extends Controller
{

    use ApiResponse;


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $systems = System::with('planets')->get();
        return response()->json($systems);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SystemRequest $request)
    {
        $data = $request->validated();
        $system = System::create($data);
        return response()->json($system, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(System $system)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, System $system)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(System $system)
    {
        //
    }
}
