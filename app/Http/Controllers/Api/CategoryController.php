<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
  public function index(): Application|Response|ResponseFactory
  {
    $categories = Category::all();
    return response($categories);
  }

  public function store(CategoryRequest $request): Application|Response|ResponseFactory
  {
    $category = Category::create($request->validated());
    return response($category, 201);
  }

  public function show(Category $category): Application|Response|ResponseFactory
  {
    return response($category);
  }

  public function update(CategoryRequest $request, Category $category): Application|Response|ResponseFactory
  {
    $category->update($request->validated());
    return response($category);
  }

  public function destroy(Category $category): Application|Response|ResponseFactory
  {
    $category->delete();
    return response(null, 204);
  }
}
