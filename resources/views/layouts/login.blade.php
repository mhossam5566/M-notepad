<!DOCTYPE html >
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assest/login.css') }}" type="text/css"/>

    <link rel="shortcut icon" type="image/png" href="{{ asset('assest/fv.png') }}"/>
</head>

<body>


@yield("content")


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