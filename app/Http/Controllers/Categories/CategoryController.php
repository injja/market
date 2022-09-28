<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Services\Categories\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function create(Request $request)
    {
        $category = $request->get('category');
        //$category['user_id'] = $request->user()->id;
        $this->categoryService->create($category);
    }
    public function get($id)
    {
        $category = $this->categoryService->get($id);
        return response()->json(['category' => $category]);
    }

    public function destroy($id)
    {
        $this->categoryService->destroy($id);
    }
}
