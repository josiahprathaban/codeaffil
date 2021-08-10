<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeaffil</title>
    <style>
        body {
            margin: auto;
            text-align: center;
            padding: 100px;
        }

        input{
            padding: 10px;
            margin-top: 15px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
</head>

<body>
    <a href="/"><img src="{{ asset('assets/images/logo/logo.jpg')}}" alt="logo" width="182px" /></a>
    <h2>Password Reset</h2>
    <form action="/_psaaword_reset" method="post">
        @csrf
        <input hidden name="email" value="{{$user_email}}">
        <input type="password" minlength="8" required placeholder="New Password" id="password" name="password" >
        <input type="password" minlength="8" required placeholder="Confirm Password" id="confirm_password">
        
        @if(session('error'))
        <br/><br/>
        <div style="color:#ef1e1e">{{session('error')}} <a href="/register"> Register Now</a></div>
        @endif
        <input type="submit" value="Reset">
    </form>

    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>

</html>