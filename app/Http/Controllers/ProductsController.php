<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware(['permission:product-list|product-create|product-edit|product-delete'], ['only' => ['index', 'show', 'table', 'saleshistory']]);
        $this->middleware(['permission:product-create'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:product-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:product-delete'], ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(50);
        return view('products.index', compact('products'));
    }

    
    //controller for product table

        public function table(Product $product)
        {
            $products = Product::latest()->paginate(50);
            return view('products.producttable', compact('products'));
        }
    //

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
         'name' => 'required',
        'detail'  => 'required',
        'qtyavailable' => 'required',
        'Sellingprice' => 'required',
        'unitprice'  => 'required',
        'image' => 'mimes:jpeg, png, jpg ,gif ,svg|max:2048',

       
        ]);

        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }
  
        Product::create($input);
   
        return redirect()->route('products.create')->with('success','Product Create Successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }


    //sales entry controller 
    public function salesentry(Product $product)
    {
        return view('products.salesentry ', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product )
    {
        request()->validate([
            'name' => 'required',
           'detail'  => 'required',
           'qtyavailable' => 'required',
           'Sellingprice' => 'required',
           'unitprice'  => 'required',
           'image' => 'required|image|mimes:jpeg, png, jpg ,gif ,svg|max:2048',
   
          
           ]);
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $productImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $input['image'] = "$productImage";
        }else{
            unset($input['image']);
        }
          
        $product->update($input);
  
        return redirect()->route('products.index')->with('success','product Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }





    
}
