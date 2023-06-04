@extends('nav')

@section('content')
<br>
<br>
<br>

<center><div class="cnt">
<br><div class="ttl">{{$note->title}}</div>
<br><div class="cntn">{{$note->content}}</div><br>
<div class="td"><p>created at : {{$note->created_at}} </div><br>
</div>

<br><br>
<div class="ftr">
<h4>M-Notepad</h4>
<p>save your important notes online and access it from any where and from any device.</p>
by : <a href="https://facebook.com/mhossam5566"> Mohamed Hossam</a>
</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	 </body>
 </html>
 @endsection