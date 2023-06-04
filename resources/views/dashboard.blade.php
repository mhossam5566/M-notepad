@extends("layouts.nav")
<style>
  body {
    font-family: 'Acme', 'Cairo', sans-serif;
    background-image: url("assest/bg.jpg");
    Background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
  }

  .nw {
    width: 80%;
    font-size: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.29);
  }

  .yr {
    width: 80%;
    font-size: 20px;
    padding: 5px 0 5px 0px;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.29);
  }

  .era {
    width: 80%;
  }

  .ncnt {
    padding: 10px;
    width: 313px;
    ;
    background-color: #fff;
    color: #1880d8;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.29);
  }

  .nttl {
    font-size: 20px;
    width: 95%;
    border-radius: 5px;
    border: 1px solid #1880d8;
    padding: 5px;
  }

  .ncntt {
    display: block;
    background-color: #fff;
    margin-top: 5px;
    width: 95%;
    color: #1880d8;
    font-family: 'Acme', 'Cairo', sans-serif;
    border: 1px solid #1880d8;
    padding: 5px;
    white-space: pre-wrap;
  }

  .nftr {
    margin-top: 5px;
    width: 95%;
    padding-top: 5px;
  }



  .dt {
    margin-right: 100px;
  }

  .dl {
    border: 1px solid #fff;
    background-color: red;
    color: #fff;
  }

  .edt:hover {}

  .cp {
    border: 1px solid #fff;
    margin-left: 2px;
  }

  .ftr {
    position: absolute;
    bottom: 0px;
  }

  .navbar-brand {
    height: 195%;
    margin-top: -7px;
  }
</style>
@section("content")

    <br>
    <br>
    <center>
      <h2>{{ __("welcome")}} {{ Auth::user()->name}} </h2>
      <br>
      <br>
      <a href="{{route('add')}}" class="btn btn-info  nw" name="add">
        <i class="fas fa-plus-circle"></i> {{ __("add new note")}} </a>
      <hr>
      <p class="bg-info yr">{{ __("Your Notes")}}</p> @foreach($notes as $n) 
      
      
    
      <br>
      <center>
      <div class="ncnt">
        <div class="nttl">{{$n->title}}</div>
        <pre class="ncntt">{{$n->content}}</pre>
        <div class="nftr">
          <a href="/edit/{{$n->id}}">
            <button class="btn edt" name="edit" style=" margin-left: -10px;
    border-radius: 5px;
    border: 1px solid #1880d8;
    background-color: #1880d8;
    color: #fff;">
              <i class="fas fa-edit"></i> {{ __("edit")}} </button>
          </a>
      
            <button class="btn dl" name="delet" onclick="del()" style="border: 1px solid #fff;
    background-color: red;
    color: #fff;">
            <form id="delete_note" action="{{ route('delete') }}" method="POST" style="display: none;">
                                    <input type="hidden" name="id" value="{{ $n->id }}">
                                    {{ csrf_field() }}
                                </form>
              <i class="fas fa-trash"></i> {{ __("delete")}} 
</button>
          
          <button class="btn btn-success cp" name="copy" data-clipboard-text="{{request()->getHttpHost();}}/note/{{$n->id}}" onclick='dn()'>
            <i class="fas fa-link"></i> {{ __("link")}} </button>
          <br>
          <br>
          <span class="dt" style="width:100%"> {{ __("time")}}  : {{$n->created_at}}</span><br>
    @if($n->prv == 1)
    <span>{{ __("public")}} <i class="fas fa-unlock"></i></span>
    @else
    <span>{{ __("private")}} <i class="fas fa-lock"></i></span>
    @endif
        </div>
      </div>
  </div>
 
  <!--ntcnt-->
  </div>
  <!--cnt--> 
  
  @endforeach
  
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
  
  
  <script>
    new ClipboardJS('.cp');
  </script>
  
  <script>
 function del() {
  Swal.fire({
    title: '{{ __("Are You Sure?")}}',
    text: "{{ __('You won\'t be able to revert this!')}}",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: '{{ __("Yes, delete")}}',
    cancelButtonText: "{{ __('cancle')}}",
            
    showLoaderOnConfirm: true,
    preConfirm: () => {
      return new Promise((resolve) => {
        setTimeout(() => {
          resolve();
        }, 2000); // زمن الانتظار قبل استكمال الحذف (2 ثانية هنا)
      });
    },
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.showLoading(); // عرض شاشة الانتظار المستمرة
      document.getElementById('delete_note').submit();
      Swal.fire(
        'Deleted!',
        'Your note has been deleted.',
        'success'
      );
      // أو يمكنك إعادة توجيه المستخدم إلى صفحة جديدة بعد الحذف
      // window.location.href = 'new_page.html';
    }
  });
}


  
  
  function dn(){
  Swal.fire(
  '{{__("Copied")}}',
  '{{ __("copied done")}}',
  'success'
)
  }
  </script>
</body>
</html>

@endsection