<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h5>
            Data covid
        </h5>
    </div>
    @foreach($data as $indo)
        <h5>Data Positif=> {{ $indo['positif'] }}</h5>
<h4>Data sembuh=> {{ $indo['sembuh'] }}</h4>
<h4>Data Meninggal=> {{ $indo['meninggal'] }}</h4>
    @endforeach
</body>

</html>
