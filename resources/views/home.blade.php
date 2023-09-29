<style>

    .fila {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
    .contenedor {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin: 50px;
            }
    .contenedor img {
                width: 25%;
                max-width: 180px;
                height: auto;
                margin-bottom: 20px;
            }
    </style>
    
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h1>UNIDADES HOSPITALARIAS</h1></div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
    
                        
        <div class="fila">
            <div class="contenedor">
                <img src="{{url('/images/urgencias.png')}}" >
                <a href="#">URGENCIAS</a>
            </div>
            <div class="contenedor">
                <img src="{{url('/images/ambulance.png')}}" >
                <a href="#">SERVICIO DE AMBULANCIA</a>
            </div>
            <div class="contenedor">
                <img src="{{url('/images/neorologia.png')}}" >
                <a href="#">UNIDAD NEOROLOGICA</a>
            </div>
        </div>
        <div class="fila">
            <div class="contenedor">
                <img src="{{url('/images/farmacia.png')}}" >
                <a href="#">FARMACIA</a>
            </div>
            <div class="contenedor">
                <img src="{{url('/images/rayos x.png')}}" >
                <a href="#">RAYOS X</a>
            </div>
            <div class="contenedor">
                <img src="{{url('/images/cuidados.png')}}"" >
                <a href="#">CUIDADOS INTENSIVOS</a>
            </div>
        </div>
    
        </form>
              </select><br>
                    </div>
                </div>
            </div>
        </div>
    </div>