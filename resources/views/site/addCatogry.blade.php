@extends('site/master')
@section('content')

<div class="box box-primary" style="width:600px; margin: 0 auto; border-top-width: 50px;">
            <div class="box-header with-border">
              <h3 class="box-title">Add Catogry</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! Form::open( [ 'url' => 'catogry','files' =>'true','role'=>'form']) !!}
            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Catogry Name</label>
                  {!!Form::text("catogry_name", "",["class"=>"form-control","id"=>"exampleInputEmail1","placeholder"=>"Enter Catogry Name"])!!}
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Catogry Discription</label>
                  {!!Form::textarea("catogry_discription","",["class"=>"form-control","id"=>"exampleInputPassword1","placeholder"=>"Enter Catogry discription"])!!}

                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Catogry picture</label>
                  {!!Form::file("catogry_pic")!!}
                  
                  

                  
                </div>
                {!!Form::submit("Submit",["class"=>"btn btn-primary"])!!}
                
              </div>
              <!-- /.box-body -->

              
            {!!Form::close()!!}
          </div>

@stop