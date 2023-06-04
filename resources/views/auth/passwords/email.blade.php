 @extends("layouts.login")
@section("content")

<form class="cnt" action="{{ route('password.email') }}" method="POST" id="signupForm">

@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
    @csrf
    <div class="avt">
        <!-- الأفاتار -->
        <img src="{{ asset('assest/2.png') }}" class="avp" />
    </div>
    <!-- الأفاتار -->
    <img src="{{ asset('assest/1.png') }}" class="svg" />
    	
    <div>
    
    <h2>{{ __("Forget Password")}}</h2>
        
        <!-- الإيميل -->
      
        <input type="email" placeholder="{{ __("email")}}" class="ml form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }} " required />
        
          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
    <!-- الإيميل -->
    <div>
    <br>
 
    <input type="submit" class="lgn" value="{{ __("Reset")}}" name="reg" />
    
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