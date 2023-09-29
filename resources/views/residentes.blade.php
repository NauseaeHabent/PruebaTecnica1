Residentes
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
  #avatar {
float: left;    
 margin: 0px 0 0 10px;
}

img {
  width: 40%;
  height: auto;
}
.card-text{
    font-size:10px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}
</style>

  </head>
<table>
  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-5 g-1">

        @foreach ($data as $residente)

                <div class="col">
                  <div class="card shadow-sm h-100">
                    <div class="card-body">
                      <img src="{{ $residente['image'] }}" id="avatar" >
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
                          <button type="button" class="btn btn-sm btn-outline-secondary">Guardar Personaje</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        @endforeach
            </div>
         </div>
       </div>