<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-migration-seeder</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <div class="row gy-5 p-5">
            @foreach ($trains as $train)
                <div class="col-4">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <h2 class="card-title mb-4 text-warning">{{ $train->azienda }}</h2>
                            <h4 class="card-subtitle mb-4">Stazione di partenza: {{ $train->stazione_di_partenza }}</h4>
                            <h4 class="card-subtitle mb-4">Stazione di arrivo: {{ $train->stazione_di_arrivo }}</h4>
                            <p class="card-text"><strong>Orario di partenza: </strong>{{ $train->orario_di_partenza }}</p>
                            <p class="card-text"><strong>Orario di arrivo: </strong>{{ $train->orario_di_arrivo }}</p>
                            <p class="card-text"><strong>Codice treno: </strong>{{ $train->codice_treno }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</body>

</html>