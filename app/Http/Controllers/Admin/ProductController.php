<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductController extends Controller
{
    /**
     * @var PostRepositoryInterface|\App\Repositories\Repository
     */
    protected $productRepo;

    public function __construct(ProductRepositoryInterface $productRepo)
    {
        $this->productRepo = $productRepo;
    }
    
    public function index()
    {
        $products = $this->productRepo->getProduct();

        return view('admin.products', ['products' => $products]);
    }
    
    public function show(Request $req)
    {
        $product = $this->productRepo->find($req->id);

        return view('admin.product', ['product' => $product]);
    }
    
    public function store(Request $request)
    {
        $data = $request->all();

        //... Validation here

        $product = $this->productRepo->create($data);

        return view('admin.products');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        //... Validation here

        $product = $this->productRepo->update($id, $data);

        return view('admin.products');
    }
    
    public function destroy($id)
    {
        $this->productRepo->delete($id);
        return view('admin.products');
    }
}