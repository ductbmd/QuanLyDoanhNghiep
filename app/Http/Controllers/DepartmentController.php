<?php

namespace App\Http\Controllers;
use App\Department;
use Illuminate\Http\Request;
use App\Repositories\DepartmentRepository;
class DepartmentController extends Controller
{
    private $model;

    public function __construct(DepartmentRepository $model)
    {
        $this->middleware('auth', ['except'=>[]]);
        $this->model = $model;
        
    }
    public function index()
    {

        return view('department.index')->with('datas',$this->model->paginate(15));
    }
    public function create()
    {
    	return view('department.create');
    }
    public function store(Request $request)
    {
    	$input=$request->except(['_token']);
    	$this->model->create($input);
    	return $this->index();
    }
    public function edit($id)
    {
       return view('department.edit')->with('department',$this->model->findBy('id',$id));
    }
    public function update($id,Request $request)
    {
        $input=$request->except(['_token','_method']);
        $this->model->update($input, $id);
        return redirect()->route('department.index');
    }
    public function destroy($id)
    {
        $department=$this->model->findBy('id',$id);
        $department->delete();
        return redirect()->route('department.index');
    }

}
