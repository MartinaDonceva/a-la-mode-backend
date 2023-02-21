<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class Products extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $products = Product::query()->get();

        return JsonResource::collection($products);
    }
}
