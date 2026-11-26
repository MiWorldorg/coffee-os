<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin\Customer;
use App\Models\Admin\Product;
use App\Models\Sales;
use Illuminate\Http\JsonResponse;

class CoffeeOSDashboardDataController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'summary' => [
                'products' => Product::count(),
                'customers' => Customer::count(),
                'orders' => Sales::count(),
                'revenue' => (float) Sales::sum('amount'),
            ],
            'products' => Product::query()
                ->select(['id', 'name', 'description', 'price', 'image_location'])
                ->orderBy('name')
                ->limit(8)
                ->get(),
        ]);
    }
}
