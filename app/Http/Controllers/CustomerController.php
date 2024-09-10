<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\CustomerModel;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::latest()->paginate(5);
        return view('customer.index',compact('customers'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'targetproduct' => 'required',
            'detail' => 'required',
            'portfolio' => 'nullable', // Assuming this field is optional
            'transactions' => 'nullable', // Assuming this field is optional
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }
  
        Customer::create($input);
   
        return redirect()->route('customers.index')->with('success','Customer Create Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer )
    {
        $request->validate([
            'name' => 'required',
            'targetproduct' => 'required',
            'detail' => 'required',
            'portfolio' => 'nullable', // Assuming this field is optional
            'transactions' => 'nullable', // Assuming this field is optional
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $customerImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $customerImage);
            $input['image'] = "$customerImage";
        }else{
            unset($input['image']);
        }
          
        $customer->update($input);
  
        return redirect()->route('customers.index')->with('success','customer Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
  
        return redirect()->route('customers.index')->with('success','customer Deleted Successfully');
    }
}