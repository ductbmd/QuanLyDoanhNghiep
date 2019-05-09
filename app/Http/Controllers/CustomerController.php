<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Repositories\CustomerRepository;
class CustomerController extends Controller
{
    private $model;

    public function __construct(CustomerRepository $model)
    {
        $this->middleware('auth', ['except'=>[]]);
        $this->model = $model;
        
    }
    public function index()
    {
        return view('customer.index')->with('datas',$this->model->paginate(15));
    }
    public function create()
    {
    	return view('customer.create');
    }
    public function store(Request $request)
    {
    	$input=$request->except(['_token']);
    	$this->model->create($input);
    	return $this->index();
    }
    public function edit($id)
    {
       return view('customer.edit')->with('customer',$this->model->findBy('id',$id));
    }
    public function update($id,Request $request)
    {
        $input=$request->except(['_token','_method']);
        $this->model->update($input, $id);
        return redirect()->route('customer.index');
    }
    public function destroy($id)
    {
        $customer=$this->model->findBy('id',$id);
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
