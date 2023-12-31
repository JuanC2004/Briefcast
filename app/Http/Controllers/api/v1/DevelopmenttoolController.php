<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\DevelopmenttoolStoreRequest;
use App\Http\Requests\api\v1\DevelopmenttoolUpdateRequest;

use App\Http\Resources\DevelopmenttoolResource;
use App\Models\Developmenttool;
use Illuminate\Http\Request;

class DevelopmenttoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $developmenttools = Developmenttool::orderBy('name','asc')->get();
        return response()->json(['data' => $developmenttools],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DevelopmenttoolStoreRequest $request)
    {
        $developmenttool = Developmenttool::create($request->all());
        return response()->json(['data' => new DevelopmenttoolResource($developmenttool)],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Developmenttool $developmenttool)
    {
        return response()->json(['data' => new DevelopmenttoolResource($developmenttool)],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DevelopmenttoolUpdateRequest $request, Developmenttool $developmenttool)
    {
        $developmenttool->update($request()->all());
        return response()->json(['data' => new DevelopmenttoolResource($developmenttool)],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Developmenttool $developmenttool)
    {
        $developmenttool->delete();
        return response()->json([],204);
    }
}
