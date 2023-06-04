@extends('layouts.nav')


@section('content')
	 <br><br>
	 <h1>M NOTEPAD</h1>
	 
	 <p>{{ __("desc1")}}</p>
	 <p>{{ __("desc2")}}</p>
	 
	 
	 <div  class="btns"><!--الازرار-->
	 <a href="singup" class="btn btn-success su">{{__("signup")}}</a>
	 <a class="btn btn lg" href="login">{{ __("login")}}</a>
	 </div><!--الازرار-->
	 
	 
	 
	<div class="num">
	
	<div class="usrnm">
	<h3 >{{ __("users number")}}</h3>
	<h4 >{{$users}}</h4>
	</div>
	
	<div class="ntnm">
	<h3>{{ __("notes number")}}</h3>
	<h4>{{$notes}}</h4>
	</div>
	
	
	</div>
	
	
	 <div  class="ftr">
	 <hr>
	 <p>{{ __("All copyright reserved")}} © 2021 </p>
	 <p>Mohamed Hossam</p>
	 
	 </div>
	 
	 
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	
	<script src="https://cdn.jsdelivr.net/npm/bubbly-bg@1.0.0/dist/bubbly-bg.js"></script>
  <script>bubbly();</script>
	 </body>
 </html>
 
 @endsection