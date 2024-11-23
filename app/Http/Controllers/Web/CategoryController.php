<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\CategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
  public function index(): View|Factory|Application
  {
    $categories = Category::all();
    return view('categories.index', compact('categories'));
  }

  public function store(CategoryRequest $request): RedirectResponse
  {
    Category::create($request->validated());
    return redirect()->route('categories.index');
  }

  public function create(): View|Factory|Application
  {
    return view('categories.create');
  }

  public function show(Category $category): View|Factory|Application
  {
    return view('categories.show', compact('category'));
  }

  public function update(CategoryRequest $request, Category $category): RedirectResponse
  {
    $category->update($request->validated());
    return redirect()->route('categories.index');
  }

  public function edit(Category $category): View|Factory|Application
  {
    return view('categories.edit', compact('category'));
  }

  public function destroy(Category $category): RedirectResponse
  {
    $category->delete();
    return redirect()->route('categories.index');
  }
}
