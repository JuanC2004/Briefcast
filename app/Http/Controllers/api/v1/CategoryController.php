<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\CategoryStoreRequest;
use App\Http\Requests\api\v1\CategoryUpdateRequest;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('name','asc')->get();
        return response()->json(['data' => $categories],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        $category = Category::create($request->all());
        return response()->json(['data' => new CategoryResource($category)],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json(['data' => new CategoryResource($category)],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->update($request->all());
        return response()->json(['data' => new CategoryResource($category)],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([],204);
    }
}
