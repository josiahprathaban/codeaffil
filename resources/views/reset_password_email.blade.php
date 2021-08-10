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
    <h2>Enter your email address to reset password</h2>
    <form action="/_sent_reset" method="post">
    @csrf
        <input type="email" name="email" placeholder="Email address">
        <input type="submit" value="Reset">
    </form>
</body>

</html>