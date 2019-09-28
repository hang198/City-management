<?php

namespace App\Http\Controllers;

use App\City;
use App\Customer;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();
        $cities = City::all();
        return view('customers.list',compact('customers','cities'));
    }
    public function create() {
        $cities = City::all();
        return view('customers.create',compact('cities'));
    }
    public function store(CustomerRequest $request) {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->dob= $request->dob;
        $customer->email= $request->email;
        $customer->city_id= $request->city_id;
        $customer->save();
        return redirect()->route('customers.index');
    }
    public function edit($id) {
        $customer = Customer::findOrFail($id);
        $cities = City::all();
        return view('customers.edit',compact('customer','cities'));
    }
    public function update(CustomerRequest $request,$id) {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->dob= $request->dob;
        $customer->email= $request->email;
        $customer->city_id= $request->city_id;
        $customer->save();
        return redirect()->route('customers.index');
    }
    public function filterByCity(Request $request) {
        $idCity = $request->city_id;
        $cityFiler = City::findOrFail($idCity);
        $customers = Customer::where('city_id',$cityFiler->id)->get();
        $totalCustomerFilter = count($customers);
        $cities = City::all();
        return view('customers.list', compact('customers', 'cities', 'totalCustomerFilter', 'cityFilter'));
    }
}
