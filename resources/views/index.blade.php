<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h5>
            Data covid
        </h5>

    @foreach($data as $indo)
        <h5>Data Positif=> {{ $indo['positif'] }}</h5>
<h4>Data sembuh=> {{ $indo['sembuh'] }}</h4>
<h4>Data Meninggal=> {{ $indo['meninggal'] }}</h4>
    @endforeach

<a href="{{ url('/provinsi') }}" class="btn btn-primary">Provinsi</a>
<a href="{{ url('/global') }}" class="btn btn-primary">Dunia</a>
</div>
</body>

</html>
