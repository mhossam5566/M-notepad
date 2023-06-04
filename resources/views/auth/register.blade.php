 @extends("layouts.login")
@section("content")

<form class="cnt" style="height:500px" action="{{ route('register') }}" method="POST" id="signupForm">
    @csrf
    <div class="avt">
        <!-- الأفاتار -->
        <img src="{{ asset('assest/2.png') }}" class="avp" />
    </div>
    <!-- الأفاتار -->
    <img src="{{ asset('assest/1.png') }}" class="svg" />
    <h1>{{ __("signup")}}</h1>
    <div>
        <!-- المستخدم -->
     
        <input type="text" class="usr" placeholder="{{__("username")}}" name="name" required />
    </div>
    <!-- المستخدم -->
    <div>
    
        <!-- الإيميل -->
      
        <input type="email" class="ml" placeholder="{{ __("email")}}" name="email" required />
    </div>
    <!-- الإيميل -->
    <div>
    
        <!-- الباسوورد -->
       
        <input type="password" class="psw" placeholder="{{__("password")}}" name="password" required />
    </div>
    <!-- الباسوورد -->
    <div>
    
        <!-- إعادة كتابة الباسوورد -->
        
        <input type="password" class="psw" placeholder="{{ __("retypepass")}}" name="password_confirmation" required />
    </div>
    <!-- إعادة كتابة الباسوورد -->
    <input type="submit" class="lgn" value="{{ __("signup")}}" name="reg" />
    <hr width="90%">
    <p class="ftr">{{ __("haveacc")}} <a href="../login">{{ __("login")}}</a></p>
</form>

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
<script>
    // عرض رسالة الخطأ إذا كانت البيانات غير صحيحة
    @if ($errors->any())
        const errorMessages = @json($errors->all());

        Swal.fire({
            title: 'Error',
            html: '<ul class="err">' +
                errorMessages.map(errorMessage => `<li>${errorMessage}</li>`).join('') +
                '</ul>',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    @endif
</script>
@endsection