<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\ItemFile;
use App\Repositories\ItemRepository;
use App\Services\UploadFileService;
use DB;
class ItemController extends Controller
{
   private $model;

    public function __construct(ItemRepository $model)
    {
        $this->middleware('auth', ['except'=>[]]);
        $this->model = $model;
        
    }
    public function index()
    {
        /*$this->model->createDetail();*/
        return view('item.index')->with('datas',$this->model->with('file.file')->paginate(8));
    }
    public function search(Request $request)
    {
        /*dd($request);*/
        return view('item.search')->with('datas',$this->model->findDetail($request->search));
    }
    public function create()
    {
    	return view('item.create');
    }
    public function store(Request $request)
    {
    	$input_item=$request->except(['file', '_token']);
        $input_item_file  = array();
        DB::beginTransaction();
        try {
            $item_id=$this->model->create($input_item)->id;
            //Tao item
            $this->model->createDetail($item_id);
            if ( $request->file('file')[0] ) {
                $file_id=UploadFileService::uploadImage($request->file('file')[0]);
                //Tao file
                $input_item_file['item_id']=$item_id;
                $input_item_file['file_id']=$file_id;
                $input_item_file['description']=Item::$item_type[$request->type];

                $test=ItemFile::create($input_item_file);


                //Tao Lien ket file va item
            }
        } catch (Exception $e) {
            DB::rollBack();
            echo $e;
        }
        DB::commit();
        return redirect()->route('item.index');
    }
    public function edit($id)
    {
        /*dd($this->model->with('file.file')->find($id));*/
       return view('item.edit')->with('item',$this->model->with('file.file')->find($id));
    }
    public function update($id,Request $request)
    {
        $input=$request->except(['_token','_method','file']);
        DB::beginTransaction();
        try {
            
            $this->model->update($input, $id);
            //Update item
            if ( $request->file('file')[0] ) {
                $file_id=UploadFileService::uploadImage($request->file('file')[0]);
                //Tao file

                $test=ItemFile::where('item_id',$id)->update(['file_id'=>$file_id]);

                //Tao Lien ket file va item moi
            }
        } catch (Exception $e) {
            DB::rollBack();
            echo $e;
        }
        DB::commit();
        
        return redirect()->route('item.index');
    }
    public function destroy($id)
    {
         DB::beginTransaction();
         try {
             $staff=$this->model->findBy('id',$id);
             $staff->delete();
             ItemFile::where('item_id',$id)->delete();
         } catch (Exception $e) {
              DB::rollBack();
            echo $e;
         }
        DB::commit();
        redirect()->route('item.index');
    }
}
