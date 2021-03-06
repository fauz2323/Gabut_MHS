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
                <h3 class="text-center">DATA DUNIA</h3>
            <div class="row justify-content-center">
                <form action="{{ url('/global') }}" method="get">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Negara</label>
                        <select class="form-control" name="dunia" id="exampleFormControlSelect1">
                            <option selected disabled value="">Choose...</option>
                            @foreach($data as $item)
                                <option
                                    value="{{ $item['attributes']['Country_Region'] }}">
                                    {{ $item['attributes']['Country_Region'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-block">Cari Data</button>
                    </div>
                </form>
            </div>
            <div class="row justify-content-center">
                @foreach($data as $provinsi)
                @if ($provinsi['attributes']['Country_Region']==$keydunia)
                    <div class="col-sm-4 mb-3">
                        <div class="card text-white bg-danger">
                            <div class="card-header">
                                {{ $provinsi['attributes']['Country_Region'] }}
                            </div>
                            <div class="card-body">
                                <b>
                                    <h5 class="card-title">
                                        {{ $provinsi['attributes']['Confirmed'] }}
                                        Kasus</h5>
                                </b>
                                <p>Sembuh =>
                                    {{ $provinsi['attributes']['Recovered'] }}
                                </p>
                                <p>Meninggal =>
                                    {{ $provinsi['attributes']['Deaths'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>
        </div>
</body>

</html>
