@extends('site/master')
@section('content')



<div class="box box-primary" style="width:400px; height: 430px; border-top-width: 50px; margin: 0 auto; ">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Prodect in {{$catogry->catogry_name}} Catogry</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! Form::open( [ 'url' => 'prodect','files' =>'true','role'=>'form']) !!}
            {!!Form::hidden("catogry_id","$catogry->id")!!}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Prodect Name</label>
                  {!!Form::text("prodect_name", "",["class"=>"form-control","id"=>"exampleInputEmail1","placeholder"=>"Enter Prodect Name"])!!}
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Prodect Price</label>
                  {!!Form::text("prodect_price", "",["class"=>"form-control","id"=>"exampleInputEmail1","placeholder"=>"Enter Prodect Price"])!!}
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Prodect Quantity</label>
                  {!!Form::text("prodect_quantity", "",["class"=>"form-control","id"=>"exampleInputEmail1","placeholder"=>"Enter Prodect Quantity"])!!}
                  
                </div>

                
                <div class="form-group">
                  <label for="exampleInputFile">Prodect picture</label>
                  {!!Form::file("prodect_pic")!!}
                  
                  

                  
                </div>
                {!!Form::submit("Submit",["class"=>"btn btn-primary"])!!}
                
              </div>
              <!-- /.box-body -->

              
            {!!Form::close()!!}
          </div>
          <table class="table tabel-bordered">
    <tr>
      <th>Prodect </th>
      <th>Prodect Picture</th>
      <th>Prodect Price</th>
      <th>Prodect Quantity</th>
    </tr>
    @foreach ($all_prodects as $all_prodect)
    <tr>
    {!! Form::open( [ "url" => "prodect/$all_prodect->id","files" =>"true","method"=>"PATCH" ]) !!}
    
      <td>{!!Form::text("prodect_name", "$all_prodect->prodect_name")!!}</td>
      {!!Form::hidden("catogry_id","$catogry->id")!!}
      <td><img style="  width: 150px; height: 170px;" src="/website/images/{{$all_prodect->prodect_pic}}" alt=""><br>
      {!!Form::file("prodect_pic")!!}</td>
      <td >{!!Form::text("prodect_price", "$all_prodect->prodect_price" )!!}</td>
      <td >{!!Form::text("prodect_quantity", "$all_prodect->prodect_quantity" )!!}</td>
      <td>{!!Form::submit("UPDATE",["class"=>"btn btn-info"])!!}</td>
      {!!Form::close()!!}
      <td>

{!! Form::open( [ "url" => "prodect/$all_prodect->id","files" =>"true","method"=>"DELETE" ]) !!}
  {!!Form::hidden("catogry_id","$catogry->id")!!}
{!!Form::submit("DELETE",["class"=>"btn btn-info"])!!}
{!!Form::close()!!}


</td>
           
    </tr>
@endforeach
  </table>
  







@stop