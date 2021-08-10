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
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
</head>

<body>
    <a href="/"><img src="{{ asset('assets/images/logo/logo.jpg')}}" alt="logo" width="182px" /></a>
    <h2>Email varified successfully!</h2>
    <p>Please wait it automatically redirect to Codeaffil page.</p>
    <script>
        var time = 1;
        setInterval(function() {
            var seconds = time % 60;
            time--;
            if (time == 0) {
                window.location.href = '/';
            }
        }, 1000);
    </script>
</body>

</html>