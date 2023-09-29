Residentes
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.8);
    padding-top: 60px;
  }

  .modal-content {
    background-color: #fefefe;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px;
  }

  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }
img {
  width: 40%;
  height: auto;
  cursor: pointer;
  float: left;    
 margin: 0px 0 0 10px;

}
.card-text{
    font-size:10px;
    text-overflow: ellipsis;
    white-space: nowrap;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js"></script>

  </head>
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
         <a href="{{ route('rickAndMorty.showAll') }}" class="btn btn-primary">Mostrar Personajes Guardados</a>

       </div>

