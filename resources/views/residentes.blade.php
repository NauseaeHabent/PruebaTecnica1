@extends('layouts.app')
@section('content')

<div class="text-center">
    <h3>Residentes</h3>
</div>
<table>
  
  <div class="container">
    <div class="form-container">
      <div class="container">

    

    </div>
  <div class="album py-5 bg-body-tertiary">

    <div class="container">
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-5 g-1">



        @foreach ($data as $residente)

                <div class="col">
                  <div class="card shadow-sm h-100">
                    @php
                    $id_personaje = $residente['id'];
                    $colorAsignado = '';
    
                    if ($id_personaje < 50) {
                        $colorAsignado = 'green';
                    } elseif ($id_personaje >= 50 && $id < 80) {
                        $colorAsignado = 'blue';
                    } else {
                        $colorAsignado = 'red';
                    }
                @endphp
                    <div class="card-body"  style="background-color: {{ $colorAsignado }};">
                      
                      <img src="{{ $residente['image'] }}" id="img_{{ $residente['id'] }}" onclick="openModal({{ $residente['id'] }})">
                      <div id="modal_{{ $residente['id'] }}" class="modal">

                        <div class="modal-content">
                          <span class="close" onclick="closeModal({{ $residente['id'] }})">&times;</span>
                          <p>Name: {{ $residente['name'] }}</p>
                          <p>Status: {{ $residente['status'] }}</p>
                          <p>Specie: {{ $residente['species'] }}</p>
                          <p>Origin: {{ $residente['origin']['name'] }}</p>
                          <p>Gender: {{ $residente['gender'] }}</p>
                          <p>Created: {{ $residente['created'] }}</p>
                          <p>Episodios:</p>
                          <p>{{ $residente['episode'][0] }} </p>
                          <p>{{ $residente['episode'][1] }} </p>
                          <p>{{ $residente['episode'][2] }} </p>                        </div>
                      </div>

                      <p class="card-text">Name: {{ $residente['name'] }}</p>
                      <p class="card-text">Status: {{ $residente['status'] }}</p>
                      <p class="card-text">Specie: {{ $residente['species'] }}</p>
                      <p class="card-text">Origin: {{ $residente['origin']['name'] }}</p>
                      <p class="card-text">Episodios:</p>
                      <p class="card-text">{{ $residente['episode'][0] }} </p>
                      <p class="card-text">{{ $residente['episode'][1] }} </p>
                      <p class="card-text">{{ $residente['episode'][2] }} </p>

                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <form action="{{ route('rickAndMorty.store', $residente['id']) }}"  method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $residente['id'] }}">
                            <input type="hidden" name="name" value="{{ $residente['name'] }}">
                            <input type="hidden" name="status" value="{{ $residente['status'] }}">
                            <input type="hidden" name="species" value="{{ $residente['species'] }}">
                          <button type="submit" class="btn btn-sm btn-outline-secondary">Guardar Personaje</button>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <script>
                  function openModal(id) {
                    document.getElementById("modal_" + id).style.display = "block";
                  }
              
                  function closeModal(id) {
                    document.getElementById("modal_" + id).style.display = "none";
                  }
                </script>

        @endforeach
            </div>
         </div>
         <div class="text-center">
         <a href="{{ route('rickAndMorty.showAll') }}" class="btn btn-primary">Mostrar Personajes Guardados</a>
         </div>
       </div>

