@extends('layouts.impact')
@section('title')
Deal show
@endsection

@section('mota')
DealDetail

@endsection
@section('content')
    <div id="content-wrapper">
        <section id="about-us" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">

                    <div class="col-md-12 fade-up">
                    	<h1 class="text-center">Bill</h1>
					</div>
					<div class="col-md-6 ">
						<b>Khách hàng:</b>&nbsp;{{$deal->customer->name}} <br>
						<b>Mã khách hàng:</b>&nbsp;{{$deal->customer_id}} <br>
						<b>Ngày:</b>&nbsp;{{$deal->created_at}} <br>
						<b>Giảm giá:</b>&nbsp;{{$deal->discount}}% <br>
					</div>
					<div class="col-md-6 text-right">
						<b>Nhân viên:</b>&nbsp;{{$deal->staff->name}} <br>
						<b>Mã nhân viên:</b>&nbsp;{{$deal->staff_id}} <br>
					</div>
					<table class="zui-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ItemID</th>
                                    <th>Tên</th>
                                    <th>Số lượng</th>
                                    <th>Đơn vị</th>
                                    <th>Giá tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($details as $detail)
                                <tr>
                                    <td>{{$detail->id}}</td>
                                    <td>{{$detail->item->id}}</td>
                                    <td>{{$detail->item->itemgoc->name}}</td>
                                    <td>{{$detail->quantity}}</td>
                                    <td>{{App\Item::$item_unit[$detail->item->itemgoc->unit]}}</td>
                                    <td>{{$detail->item->itemgoc->price}}</td>
                                </tr>
                                @endforeach
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Tổng</td>
                                <td>{{$deal->deposit}}</td>
                            </tbody>
                        </table>
                        <br><br>
							{!! Form::open(['route' => ['dealdetail.import.store'], 'method'=> 'POST','class'=>'form-inline']) !!}
				              	{!! Form::hidden('deal_id',$deal->id)!!}
				              	{!! Form::hidden('discount',$deal->discount)!!}
				                {!! Form::label('item_id', 'itemID:',['class'=>'form-group']) !!}
				                {!! Form::text('item_id','' ,['class' => 'form-control', 'placeholder' => 'Fill itemID']) !!}
				                {!! Form::label('quantity', 'So Luong:',['class'=>'form-group']) !!}
				                {!! Form::number('quantity','1', ['class' => 'form-control','min'=>0,'step'=>'1']) !!}
				              	<button type="submit" class="btn btn-primary">Ok</button>
							{!! Form::close() !!}
						 
				</div>
                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <button class="btn btn-primary " type='button' data-toggle="modal" data-backdrop="false" data-target="#edit">edit</button>
                        <button class="btn btn-primary " type='button' data-toggle="modal" data-backdrop="false" data-target="#delete">delete</button>
                    </div>
                     
                        <div class="modal fade" id="edit" role="dialog">
                            {!! Form::open(['route' => ['deal.import.update','id'=>$deal->id], 'method'=> 'PUT','class'=>'form-group']) !!}

                            <div class="modal-dialog">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Edit deal</h4>
                                    </div>
                                    <div class="modal-body">
                                      
                                          <div class="form-group">
                                            {!! Form::label('staff_id', 'Staff ID :') !!} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            {!! Form::text('staff_id',$deal->staff_id, ['class' => 'field-long', 'placeholder' => 'enter staff id']) !!}
                                          </div><br>
                                          <div class="form-inline">
                                            {!! Form::label('customer_id', 'Customer ID:') !!}
                                            {!! Form::text('customer_id',$deal->customer_id, ['class' => 'field-long', 'placeholder' => 'enter staff id']) !!}
                                          </div><br>
                                          <div class="form-group">
                                            {!! Form::label('discount', 'Discount:') !!} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            {!! Form::number('discount',$deal->discount, ['class' => 'field-long', 'placeholder' => 'enter discount','min'=>0,'max'=>100,'step'=>'1']) !!} 
                                          </div><br>
                                          <div class="form-group">
                                            {!! Form::label('description', 'Description:') !!} <br>
                                            {!! Form::textarea('description',$deal->description, [ 'placeholder' => 'enter description']) !!}
                                          </div><br>

                                    </div>

                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                                  </div>

                            </div>
                            {!! Form::close() !!}
                         </div>
                         <div class="modal fade" id="delete" role="dialog">
                            {!! Form::open(['route' => ['deal.import.delete','id'=>$deal->id], 'method'=> 'DELETE','class'=>'form-group']) !!}

                            <div class="modal-dialog">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Warning</h4>
                                    </div>
                                    <div class="modal-body">
                                      
                                          <p>Are you sure to delete this deal?</p>

                                    </div>

                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                                  </div>

                            </div>
                            {!! Form::close() !!}
                         </div>
                </div>
			 </div>      
        </section>
    </div>			
					
		@endsection