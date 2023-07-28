<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\ParticipateStoreRequest;
use App\Http\Requests\api\v1\ParticipateUpdateRequest;
use App\Models\Participate;
use Illuminate\Http\Request;

class ParticipateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participates = Participate::orderBy('created_at','asc')->get();
        return response()->json(['data' => $participates],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParticipateStoreRequest $request)
    {
        $participate = Participate::create($request->all());
        return response()->json(['data' => $participate],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Participate $participate)
    {
        return response()->json(['data' => $participate],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParticipateUpdateRequest $request, Participate $participate)
    {
        $participate->update($request->all());
        return response()->json(['data' => $participate],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participate $participate)
    {
        $participate->delete();
        return response()->json([],204);
    }
}
