<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Numbers</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="container">
        <h2>Numbers A</h2>
        @for($i=0; $i<10; $i++)
            {{ $i }}
            <br>
        @endfor
    </body>
</html>
