<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DealRepository;
use App\Repositories\DealDetailRepository;
use App\Item;
use App\ItemDetail;

class DealController extends Controller
{
    private $model;
    private $modelDetail;

    public function __construct(DealRepository $model,DealDetailRepository $modelDetail)
    {
        $this->middleware('auth', ['except'=>[]]);
        $this->model = $model;
        $this->modelDetail =$modelDetail;
    }
    public function index()
    {
    	return view('deal.index')->with('deals',$this->model->paginate(20));

    }
    public function import()
    {
    	return view('deal.import');
    }
    public function importStore(Request $request)
    {
    	$input=$request->all();
    	$id=$this->model->create($input)->id;
    	return redirect()->route('deal.import.show',$id);
    }
    public function importShow($id)
    {
    	$deal=$this->model->with('staff')->with('customer')->find($id);
    	/*dd($deal);*/
    	$details=$this->modelDetail->show($id);
    	return view('deal.importShow')->with('deal',$deal)->with('details',$details);
    }
    public function importUpdate($id,Request $request)
    {
            $input=$request->except(['_token','_method']);
            $this->model->update($input,$id);
        return redirect()->route('deal.import.show',$id);
    }
    public function importDelete($id)
    {
        $this->model->delete(['id'=>$id]);
        return redirect()->route('deal.index');
    }
    public function detailStore(Request $request)
    {
    	$input=$request->except('discount');
    	$this->modelDetail->create($input);

    	
    	$item=ItemDetail::find($request->item_id);
    	$item->owned=1;
    	$item->save();
    	$sanpham=Item::find($item->item_id);
        $price=$sanpham->price;
        $sanpham->quality-=1;
        $sanpham->save();
    	$deal=$this->model->find($request->deal_id);
    	$price=(int)($price-$price*$request->discount/100);
    	$deal->deposit+=$price;
    	$deal->save();
    	return redirect()->route('deal.import.show',$request->deal_id);
    }
}
