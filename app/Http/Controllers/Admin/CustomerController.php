<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
Use Auth;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['customers'] = Customer::paginate(12);
        return view('admin.customers.index')->with($arr);   

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Customer $customer)
    {
          
        $customer->name= $request->name;   
        $customer->address= $request->address;   
        $customer->telephone= $request->telephone;  
        $customer->mobile= $request->mobile;  
        $customer->email= $request->email;  
        $customer->contact= $request->contact;  

        $customer->proc_contact= $request->proc_contact; 
        $customer->proc_telephone= $request->proc_telephone; 
        $customer->proc_email= $request->proc_email; 

        $customer->it_contact= $request->it_contact; 
        $customer->it_telephone= $request->it_telephone; 
        $customer->it_email= $request->it_email; 

        $customer->feedback= $request->feedback; 
        $customer->customer_response= $request->customer_response; 
        $customer->followup1= $request->followup1; 

        $customer->save();             
        return redirect('admin/customers')->with('success','Transaction created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $arr['customer'] = $customer;        
        return view('admin.customers.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->name= $request->name;   
        $customer->address= $request->address;   
        $customer->telephone= $request->telephone;  
        $customer->mobile= $request->mobile;  
        $customer->email= $request->email;  
        $customer->contact= $request->contact;  

        $customer->proc_contact= $request->proc_contact; 
        $customer->proc_telephone= $request->proc_telephone; 
        $customer->proc_email= $request->proc_email; 

        $customer->it_contact= $request->it_contact; 
        $customer->it_telephone= $request->it_telephone; 
        $customer->it_email= $request->it_email; 

        $customer->feedback= $request->feedback; 
        $customer->customer_response= $request->customer_response; 
        $customer->followup1= $request->followup1; 

        $customer->save();
        return redirect()->route('admin.customers.index')->with('info','Transaction updated successfully!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::destroy($id);
        return redirect()->route('admin.customers.index')->with('error','Transaction deleted successfully!');
    }
}
