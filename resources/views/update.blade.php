@extends("layouts.nav")

@section("content")
 
 <style>
 
 body {
    font-family: 'Acme', 'Cairo', sans-serif;
    background-image: url("../assest/bg.jpg");
    Background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
  }
 .nw{
 width:80%;
 font-size:20px;
 }
 
 .yr{
  width:80%;
 font-size:20px;
 padding :5px 0 5px 0px;
  border-radius:5px;
 }
 
 .era{
 width:80%;
 text-align:center;
 }
 
 .era2{
 width:80%;
 height:150px;
 text-align:center;
 }
 .slc{
width:30%;
}
 .navbar-brand img{
 margin-top:-7px;
 
 }
 </style>
	 <body>
	
<div> <!-- cnt -->



<center>
<br>
 <h2>{{ __("edit note")}}<h2>

<br><br>
<center>
<form method="post" action = "{{route('update', $note->id)}}">
<input type="text" class="form-control era" value="{{$note->title}}" name="title"><br>
<textarea class="form-control  era2" rows="10" name="content" >{{$note->content}}</textarea>
<br>

<select class="form-control slc" name="prv">
	<option value="1" @if($note->prv == 1) selected @endif> {{ __("public")}}</option>
	<option value="2" @if($note->prv == 2) selected @endif> {{ __("private")}} </option>
</select>
<br>
<button class="btn btn-info nw"  name="edit">{{ __("edit note")}}</button>
</form>



</div>	<!--cnt-->






	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	 </body>
 </html>
 
 @endsection