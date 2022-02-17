<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Dev\Domain\Service\CategoryService;
use Dev\Infrastructure\Model\Category;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        // dd($data);
        $category = $this->categoryService->create($data);
        return response()->json($category);
    }

    public function show(Category $category)
    {
        return response()->json($category);
    }

    public function index(CategoryRequest $request)
    {
        $filters = $request->validated();
        $categories = $this->categoryService->index($filters);
        return response()->json($categories);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return response()->json($category->refresh());
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['message' => 'Category deleted successfully']);
    }
}