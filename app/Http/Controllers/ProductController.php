<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Dev\Domain\Service\ProductService;
use Dev\Infrastructure\Model\Product;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products');
        }
        // dd($data['image']);
        $product = $this->productService->create($data);
        $product->load('images');
        return response()->json($product);
    }

    public function show(Product $product)
    {
        $product->load('images');
        return response()->json($product);
    }

    public function index(ProductRequest $request)
    {
        $filters = $request->validated();
        $products = $this->productService->index($filters);
        $products->load('images');
        return response()->json($products);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products');
        }
        $product->update($data);
        $product->load('images');
        return response()->json($product->refresh());
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
}