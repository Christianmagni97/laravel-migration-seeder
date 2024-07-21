@extends('app')
@section('main-section')
<h1>Train module</h1>
<ul>
@foreach ($trains as $train)
            <li>
                <h1>
                    {{ $train->azienda}}
                </h1>
                <p>
                    Stazione di partenza: {{ $train ->stazione_di_partenza}}
                    <br>
                    Codice Treno: {{ $train ->codice_treno}}
                    <br>
                    Partenza giorno: {{ $train ->data_di_partenza}}
                    <br>
                    Orario di arrivo: {{ $train ->orario_di_arrivo}}
                </p>
            </li>
@endforeach
    </ul>
@endsection
@endsection