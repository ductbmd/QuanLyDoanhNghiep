<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostDoRepository;
use App\Repositories\PostDoneRepository;
use App\Services\UploadFileService;
use App\Staff;
use App\ItemOwned;
class PostController extends Controller
{
    private $modelDo;
    private $modelDone;
    public function __construct(PostDoRepository $modelDo,PostDoneRepository $modelDone)
    {
        $this->middleware('auth', ['except'=>[]]);
        $this->modelDo = $modelDo;
        $this->modelDone = $modelDone;
        
    }
    public function index()
    {
    	$postDo=$this->modelDo->with('file')->with('staff')->with('item.itemgoc')->paginate(6);
    	$postDone=$this->modelDone->with('file')->with('staff')->paginate(6);
        $topStaff=$this->modelDone->nhanvien();
        /*dd($postDo);*/
    	return view('post.index')->with('postDo',$postDo)->with('postDone',$postDone)->with('topStaffs',$topStaff)->with('monthpost',0);
    }
    public function create()
    {
        $staff_ids=Staff::select('id')->get();
        $staff_id=array();
        foreach ($staff_ids as $key=>$value) {
            $staff_id[$value->id]=$value->id;
        }
        $item_id=array('1258'=>'None');
        $item_ids=ItemOwned::select('item_id')->get();
        foreach ($item_ids as $key=>$value) {
            $item_id[$value->item_id]=$value->item_id;
        }
        $item_id[1258]='None';
    	return view('post.create')->with('staff_id',$staff_id)->with('item_id',$item_id);
    }
    public function store(Request $request)
    {
    	$input=$request->except(['file','_token']);
        if ( $request->file('file') ) {
                $file_id=UploadFileService::uploadImage($request->file('file'));
                //Tao file
               $input['file_id']=$file_id;
                //Tao staff
            }
    	$this->modelDo->create($input);

    	return redirect()->route('post.index');
    }
    //chi tiet vao 1 bai to do
    public function show($id)
    {
        
        return view('post.show')->with('post',$this->modelDo->with('file')->with('staff.file')->with('item.itemown.staff.file','item.itemgoc')->find($id));
    }
    //return view accep, tien hanh post anh va nhan vien
    public function accept($id)
    {
        $staff_ids=Staff::select('id')->get();
        $staff_id=array();
        foreach ($staff_ids as $key=>$value) {
            $staff_id[$value->id]=$value->id;
        }
        return view('post.accept')->with('post_do_id',$id)->with('staff_id',$staff_id);
    }

    public function accepted(Request $request)
    {
        $input=$request->except(['file','_token']);
        if ( $request->file('file') ) {
                $file_id=UploadFileService::uploadImage($request->file('file'));
                //Tao file
               $input['file_id']=$file_id;
                
            }
            $this->modelDo->find($request->post_do_id)->delete();
        $this->modelDone->create($input);

        return redirect()->route('post.index')->with('message', 'Done, you will see your work bellow WORKS HAVE DONE');
    }

    public function statistic(Request $request)
    {
        $statisticDo=$this->modelDo->DoMonth();
        $statisticDone=$this->modelDone->DoMonth();
        $arrDo=array();
        $arrDone=array();
        $rate=array();
        foreach ($statisticDo as $value) {
            $arrDo[$value->year.$value->month]=$value->total_do;
        }
        foreach ($statisticDone as $value) {
            $arrDone[$value->year.$value->month]=$value->total_do;
        }
        foreach ($arrDo as $key => $value) {
            if(isset($arrDone[$key])){
                $percent=round((($arrDone[$key]/$value)*100),2);
            }
            else{
                $percent=0;
            }
            $rate[$key]=$percent;
        }
        
        return view('post.statistic')->with('statisticDo',$statisticDo)->with('statisticDone',$statisticDone)->with('rate',$rate);
        /*dd($statisticDo);*/
    }
}
