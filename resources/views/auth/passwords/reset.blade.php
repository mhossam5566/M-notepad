@extends("layouts.login")
@section("content")

<form class="cnt" action="{{ route('password.update') }}" method="POST" id="signupForm">
@csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        
    <div class="avt">
        <!-- الأفاتار -->
        <img src="{{ asset('assest/2.png') }}" class="avp" />
    </div>
    <!-- الأفاتار -->
    <img src="{{ asset('assest/1.png') }}" class="svg" />
    <h1>{{ __("signup")}}</h1>
    <div>
        <!-- الإيميل -->
      
        <input id="email" type="email" class="ml form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="{{__('email')}}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
    </div>
    <!-- الإيميل -->
    <div>
    <br>
        <!-- الباسوورد -->
       
         <input id="password" type="password" class=" psw form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('password')}}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
    <!-- الباسوورد -->
    <div>
    <br>
        <!-- إعادة كتابة الباسوورد -->
        

                                <input id="password-confirm" type="password" class="psw form-control" name=" password_confirmation" required autocomplete="new-password" placeholder="{{ __('retypepass')}}">
    </div>
    <!-- إعادة كتابة الباسوورد -->
    <input type="submit" class="lgn" value="{{ __("Reset")}}" name="reg" />

</form>

<!-- SweetAlert2 JS -->


@endsection