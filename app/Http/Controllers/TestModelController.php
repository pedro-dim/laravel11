<?php

namespace App\Http\Controllers;

use App\Models\TestModel;
use App\Http\Requests\StoreTestModelRequest;
use App\Http\Requests\UpdateTestModelRequest;

class TestModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('testModel');
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
    public function store(StoreTestModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TestModel $testModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TestModel $testModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestModelRequest $request, TestModel $testModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestModel $testModel)
    {
        //
    }
}
