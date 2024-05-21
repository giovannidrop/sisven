<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return CustomerResource::collection($customers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'document_number' => 'required|string|max:15|unique:customers,document_number',
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'address' => 'nullable|string|max:80',
            'birthday' => 'nullable|date',
            'phone_number' => 'nullable|string|max:16',
            'email' => 'nullable|string|max:100',
        ]);

        $customer = Customer::create($request->all());
        return new CustomerResource($customer);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new CustomerResource($customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'document_number' => 'required|string|max:15|unique:customers,document_number,' . $customer->id,
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'address' => 'nullable|string|max:80',
            'birthday' => 'nullable|date',
            'phone_number' => 'nullable|string|max:16',
            'email' => 'nullable|string|max:100',
        ]);

        $customer->update($request->all());
        return new CustomerResource($customer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer->delete();
        return response()->json(null, 204);
    }
}
