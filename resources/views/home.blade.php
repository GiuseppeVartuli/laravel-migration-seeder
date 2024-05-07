@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        
            <table class="table">
            <thead>
              <tr>
                <th scope="col">Compagnia</th>
                <th scope="col">Partenza</th>
                <th scope="col">Arrivo</th>
                <th scope="col">cod. Treno</th>
                <th scope="col">Tempo di percorrenza</th>
                <th scope="col">informazione</th>
                <th scope="col">In orario</th>
                <th scope="col">Ritardo</th>
                <th scope="col">Cancellato</th>
                <th scope="col">Binario</th>
              </tr>
            </thead>
                @foreach ($trains as $train )
              <tr>
                <th scope="row">{{$train->company}}</th>
                <td>{{$train->departure_station}}</td>
                <td>{{$train->arrival_station}}</td>
                <td>{{$train->train_code}}</td>
                <td>{{$train->time}}</td>
                <td>{{$train->information}}</td>
                <td>@if (empty($train->on_time))
                  <span class="dot green"></span>
              @else
                  <span>In ritardo</span>
              @endif</td>
                <td>{{$train->delay}}</td>
                <td>{{$train->cancelled}}</td>
                <td>{{$train->platform}}</td>
              </tr>
            </tbody>
        @endforeach 
    </div>
</div>

@endsection



<style>
  .dot {
    height: 10px;
    width: 10px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
}
.green {
    background-color: green;
}
</style>