<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\product;
class productController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $pcs = product::where('category','pc')->get();
        $tablets = product::where('category','tablet')->get();
        $smartphones = product::where('category','smartphone')->get();    
        return view('products.index', compact('pcs',  'tablets', 'smartphones'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $product = product::create($this->validate_request());
        
        return redirect('products');
    }

    public function show(product $product)
    {
        return view('products.show',compact('product'));
    }

    public function edit(product $product)
    {
        return view('products.edit',compact('product'));
    }

    public function update(product $product)
    {
        $product->update($this->validate_request());
        return redirect('products/'.$product->id);
    }

    public function destroy(product $product)
    {
        $product->delete();

        return redirect('/products');
    }

    //pour la proctection de la base 
    private function validate_request()
    {
        return request()->validate([
            'name'=>'required',
            'price'=>'required',
            'model' => 'required',
            'color' => 'required',
            'category'=>'required',
        ]);
    }

}
