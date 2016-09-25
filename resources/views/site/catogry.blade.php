@extends('site/master')
@section('content')
<div class="body">
<div>

	<ul>
	@foreach($catogry as $catogrys)
	
				<li>
<a href="collections.html">
<img style="  width: 218px; height: 349px;" src="/website/images/{{$catogrys->catogry_pic}}" alt="">
</a> 

<a href="">{{$catogrys->catogry_name}}</a>
				</li>
			@endforeach	
				
			</ul>
			
</div>
<center>
<nav aria-label="Page navigation">
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