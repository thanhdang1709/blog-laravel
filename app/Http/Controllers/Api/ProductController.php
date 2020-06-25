<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Product\ProductRepository;

class ProductController extends Controller
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
        $this->middleware('auth');
    }
    
    public function index()
    {
        $products = $this->productRepo->getProduct();

        return response()->json(['products' => $products]);
    }
    public function show(Request $req)
    {
        $products = $this->productRepo->show($req->id);

        return response()->json(['product' => $products]);
    }
}
