<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="text-center">
            <h1>DATA KASUS PROVINSI</h1>
        </div>
        <div class="row">
            @foreach($data as $provinsi)
                <div class="col-sm-4 mb-3">
                    <div class="card text-white bg-danger">
                        <div class="card-header">
                            {{ $provinsi['attributes']['Provinsi'] }}
                        </div>
                        <div class="card-body">
                            <b>
                                <h5 class="card-title">
                                    {{ $provinsi['attributes']['Kasus_Posi'] }}
                                    Kasus</h5>
                            </b>
                            <p>Sembuh =>
                                {{ $provinsi['attributes']['Kasus_Semb'] }}
                            </p>
                            <p>Meninggal =>
                                {{ $provinsi['attributes']['Kasus_Meni'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
