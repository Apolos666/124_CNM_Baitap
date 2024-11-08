<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Services\CategoryService;
use App\Http\Requests\Web\Category\UpdateRequest;
use App\Http\Requests\Web\Category\CategoryStoreRequest;

class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getList();

        return view('categories.list', ['items'=> $categories]);
    }

    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category]);
    }

    public function create() {
        return view('categories.create');
    }

    public function store(CategoryStoreRequest $request) {
        $data = $request->validated();
        
        if ($this->categoryService->create($data)) {
            return redirect()->route('categories.index')
                ->with('success', 'Category created successfully');
        }
        
        return redirect()->route('categories.index')
            ->with('error', 'Failed to create category');
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        
        if ($this->categoryService->update($category, $data)) {
            return redirect()->route('categories.index')
                ->with('success', 'Updated successfully');
        }

        return redirect()->route('categories.index')
            ->with('error', 'Update failed');
    }

    public function show(Category $category)
    {
        return view('categories.show', ['category'=> $category]);
    }
}