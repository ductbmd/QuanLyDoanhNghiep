<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Department;
use App\Staff;
class LocationController extends Controller
{
    private $model;

    public function __construct(Location $model)
    {
        $this->middleware('auth', ['except'=>[]]);
        $this->model = $model;
        
    }
    public function index()
    {
        $location=Location::orderBy('staff_id','desc')->with('staff')->with('department')->paginate(16);
        /*dd($itemOwn);*/
        return view('location.index')->with('location',$location);
    }
    public function create()
    {
        $staff=Staff::select('id')->get();
        $staff_id=array();
        foreach ($staff as $value) {
            $staff_id[$value->id]=$value->id;
        }
    	
    	$departments=Department::select('id')->get();
    	$department_id = array();
    	foreach ($departments as $department ) {
    		$department_id[$department->id]=$department->id;
    	}
    	return view('location.create')->with('department_ids',$department_id)->with('staff_ids',$staff_id);
    }
    public function store(Request $request)
    {
    	
    	$input=$request->except(['_token']);
    	Location::create($input);
    	return redirect()->route('location.index');
    }
}
