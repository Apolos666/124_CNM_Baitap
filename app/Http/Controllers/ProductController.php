<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\Product\CreateRequest;
use App\Http\Requests\Web\Product\UpdateProductRequest;
use App\Http\Requests\Web\Product\StoreProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Services\ProductService;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    protected $categoryService;

    public function __construct(
        ProductService $productService,
        CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $products = $this->productService->getList();
        return view('products.list', ['items' => $products]);
    }

    public function create() {
        $categories = $this->categoryService->getList();
        return view('products.create', ['categories' => $categories]);
    }

    public function edit(Product $product) {
        $categories = $this->categoryService->getList();

        return view('products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        
        if ($this->productService->create($data)) {
            return redirect()->route('products.index')
                ->with('success', 'Product created successfully');
        }

        return redirect()->route('products.index')
            ->with('error', 'Failed to create product');
    }

    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    public function update(Product $product, UpdateProductRequest $request)
    {
        $data = $request->validated();
        
        if ($this->productService->update($product, $data)) {
            return redirect()->route('products.index')
                ->with('success', 'Product updated successfully');
        }

        return redirect()->route('products.index')
            ->with('error', 'Failed to update product');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'msg'=> 'Deleted success',
            'data' => true
        ], 200);
    }
}