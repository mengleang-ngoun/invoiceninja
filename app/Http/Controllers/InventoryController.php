<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [
            "data" => [
                ["id" => 1, "name" => "no-1", "address" => "phum-1"],
                ["id" => 2, "name" => "no-2", "address" => "phum-2"]
            ],
            "meta" => [
                "pagination" => [
                    // "total" => 8,
                    // "count" => 8,
                    // "per_page" => 100,
                    // "current_page" => 1,
                    // "total_pages" => 1,
                    // "links" => []
                ]
            ]
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return [
            "data" => ["id" => $id, "name" => "no-".$id, "address" => "phum-".$id]
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
