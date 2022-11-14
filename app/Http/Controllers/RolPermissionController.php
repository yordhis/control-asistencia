<?php

namespace App\Http\Controllers;

use App\Models\RolPermission;
use App\Http\Requests\StoreRolPermissionRequest;
use App\Http\Requests\UpdateRolPermissionRequest;

class RolPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRolPermissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRolPermissionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RolPermission  $rolPermission
     * @return \Illuminate\Http\Response
     */
    public function show(RolPermission $rolPermission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RolPermission  $rolPermission
     * @return \Illuminate\Http\Response
     */
    public function edit(RolPermission $rolPermission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRolPermissionRequest  $request
     * @param  \App\Models\RolPermission  $rolPermission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRolPermissionRequest $request, RolPermission $rolPermission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RolPermission  $rolPermission
     * @return \Illuminate\Http\Response
     */
    public function destroy(RolPermission $rolPermission)
    {
        //
    }
}
