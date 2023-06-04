<!DOCTYPE html >
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assest/login.css') }}" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="assest/fv.png"/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

   
    <div class="cnt" style="height:500px;"><!-- container -->
        <div class="avt"><!-- الافاتار -->
            <img src="{{ asset('assest/2.png') }}" class="avp"></img>
        </div><!-- الافاتار -->
        <img src="{{ asset('assest/1.png') }}" class="svg"></img>
        <h1>{{ __("login")}}</h1>
        <form method="POST" action="{{ route('login') }}" >
            @csrf
            <div><!-- المستخدم -->
                     <input type="text" class="usr" placeholder="{{ __('email')}}" name="email" required autocomplete="email"></input>
            </div><!-- المستخدم -->
            
            <div><!-- الباسوورد -->
                      <input id="password" type="password" class="psw" name="password" required placeholder="{{ __('password')}}" autocomplete="current-password">
            </div><!-- الباسوورد -->
     
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">{{__("remberme")}}</label>
            </div>
            <button type="submit" class="lgn">{{ __('login') }}</button>
            <hr width="90%">
        </form>
        <p class="ftr">{{ __('forgetpass')}} <a href="{{ route('password.request') }}">{{ __('clickhere')}}</a></p>
        <p class="ftr">{{ __('donthaveacc')}} <a href="{{ route('register') }}">{{ __('clickhere')}}</p>
    </div><!-- container -->
   
    
    <!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
<script>
    // عرض رسالة الخطأ إذا كانت البيانات غير صحيحة
    @if ($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ $errors->first() }}'
        });
    @endif
</script>

</body>
</html>