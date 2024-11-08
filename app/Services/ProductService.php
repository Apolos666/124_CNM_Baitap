<?php
namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Log;

class ProductService {
    protected $model;

    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function create($data)
    {
        try {
            return $this->model->create($data);
        } catch (Exception $exception) {
            Log::error('Error creating product: ' . $exception->getMessage());
            return false;
        }
    }

    public function update($product, $data)
    {
        try {
            return $product->update($data);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
    }

    public function getList()
    {
        return $this->model::with('category')
            ->orderBy('id','desc')
            ->get();
    }
}