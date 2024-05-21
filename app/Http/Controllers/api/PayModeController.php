<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\PayMode;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PayModeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payModes = PayMode::all();
        return PayModeResource::collection($payModes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'observation' => 'nullable|string|max:200',
        ]);

        $payMode = PayMode::create($request->all());
        return new PayModeResource($payMode);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PayModeResource($payMode);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'observation' => 'nullable|string|max:200',
        ]);

        $payMode->update($request->all());
        return new PayModeResource($payMode);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payMode->delete();
        return response()->json(null, 204);
    }
}
