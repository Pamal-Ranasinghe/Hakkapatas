<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;

class CustomersController extends Controller
{
    public function store(){
        $customers = new Customers();

        $customers->firstname = request('firstname');
        $customers->lastname = request('lastname');
        $customers->email = request('email');

        $customers->save();

        return redirect('/');
    }

    public function show(){
        $orderedCustomers = Customers::all();

        return view('show',['orderedcustomers' => $orderedCustomers]);
    }

    public function destroy($id){
        $deleteCustomer = Customers::findorFail($id);
        $deleteCustomer->delete();

        return redirect('/show');

    }
}
