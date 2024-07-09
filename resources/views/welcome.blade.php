<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>
<body>
    <h1>Trains</h1>
    <ul>
        @foreach ($trains as $train)
        <li>
          <p>{{ $train->azienda }}</p>
          <p>direzione {{ $train->stazione_di_partenza }}</p>
          <p> diretto a {{ $train->stazione_di_arrivo }}</p>
          <p>numero di carrozze: {{ $train->numero_carrozze }}</p>
          <p>{{ $train->codice_treno }}</p>
          <p>partenza {{ \Illuminate\Support\Carbon::parse($train['orario_di_partenza'])->format('d/m/Y')}}</p>
          <p>arrivo {{ \Illuminate\Support\Carbon::parse($train['orario_di_arrivo'])->format('d/m/Y')}}</p>
         @if($train->in_orario) <p>in orario </p> @endif
         @if($train->cancellato) <p> cancellato</p> @endif
          
        </li>
        @endforeach
    </ul>

<!-- ESEMPIO IMG
<img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> -->
</body>
</html>
