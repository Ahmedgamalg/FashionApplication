@extends('site/master')
@section('content')
<div class="body">
  <table class="table tabel-bordered">
    <tr>
      <th>Catogry </th>
      <th>Catogry picture</th>
      <th>discription</th>
    </tr>
    @foreach ($catogry as $catogrys)
    <tr>
    {!! Form::open( [ "url" => "catogry/$catogrys->id","files" =>"true","method"=>"PATCH" ]) !!}
    
      <td>{!!Form::text("catogry_name", "$catogrys->catogry_name")!!}</td>
      <td><img style="  width: 150px; height: 170px;" src="/website/images/{{$catogrys->catogry_pic}}" alt=""><br>
      {!!Form::file("catogry_pic")!!}</td>
      <td >{!!Form::textarea("catogry_discription", "$catogrys->catogry_discription" )!!}</td>
      <td>{!!Form::submit("UPDATE",["class"=>"btn btn-info"])!!}</td>
      {!!Form::close()!!}
      <td>
@if($catogrys->trashed())
{!! Form::open( [ "url" => "catogry/deleteforever/$catogrys->id","files" =>"true"]) !!}
  {!!Form::submit("Delete For Ever",["class"=>"btn btn-info"])!!}
    {!!Form::close()!!}
@else
{!! Form::open( [ "url" => "catogry/$catogrys->id","files" =>"true","method"=>"DELETE" ]) !!}
  
{!!Form::submit("DELETE",["class"=>"btn btn-info"])!!}
{!!Form::close()!!}

@endif
</td>
<td>
{!! Form::open( [ "url" => "catogry/$catogrys->id","files" =>"true","method"=>"GET"]) !!}
  {!!Form::submit("Show",["class"=>"btn btn-info"])!!}
    {!!Form::close()!!}
</td>
@if($catogrys->trashed())
<td>
  {!! Form::open( [ "url" => "catogry/restored/$catogrys->id","files" =>"true"]) !!}
  {!!Form::submit("RESTORED",["class"=>"btn btn-info"])!!}
    {!!Form::close()!!}
</td>
@endif
     
    </tr>
@endforeach
  </table>
  <center>
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item">
      
    </li>
    <li class="page-item">{{ $catogry->links() }}</li>
    
     
    </li>
  </ul>
</nav>
  </center>


</div>







@stop