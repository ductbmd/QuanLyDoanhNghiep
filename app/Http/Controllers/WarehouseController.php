<?php

namespace App\Http\Controllers;
use App\Warehouse;
use Illuminate\Http\Request;
use App\Repositories\WareHouseRepository;
class WarehouseController extends Controller
{
    private $model;

    public function __construct(WareHouseRepository $model)
    {
        $this->middleware('auth', ['except'=>[]]);
        $this->model = $model;
        
    }
    public function index()
    {

        return view('warehouse.index')->with('datas',$this->model->paginate(15));
    }
    public function create()
    {
    	return view('warehouse.create');
    }
    public function store(Request $request)
    {
    	$input=$request->except(['_token']);
    	$this->model->create($input);
    	return redirect()->route('warehouse.index');
    }
    public function edit($id)
    {
       return view('warehouse.edit')->with('warehouse',$this->model->findBy('id',$id));
    }
    public function update($id,Request $request)
    {
        $input=$request->except(['_token','_method']);
        $this->model->update($input, $id);
        return redirect()->route('warehouse.index');
    }
    public function destroy($id)
    {
        $warehouse=$this->model->findBy('id',$id);
        $warehouse->delete();
        return redirect()->route('warehouse.index');
    }

}
