<x-home-master>
    @section('content')
    <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Informacion de contacto</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
              <p><span>Direccion:</span> Carrera 15#16-60, Barrio Policia, Túquerres-Nariño</p>
              @if (session('info'))
                <div class="alert alert-success">       
                  {{Session::get('info')}}
                </div> 
              @endif
            </div>
            <div class="col-md-3">
              <p><span>Celular:</span> <a href="tel://1234567920">+57 3188715792</a></p>
            </div>
            
            <div class="col-md-3">
              <p><span>Pagina web:</span> <a href="#">inghectornarvaez.com</a></p>
            </div>
          </div>
          <div class="row block-9">
            <div class="col-md-6 pr-md-5">
              <form action="{{route('contact.email')}}" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Tu Nombre" name="name">
                </div>

                @error('name')
                    <p><strong>{{$message}}</strong></p>
                @enderror

                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Tu Correo" name="correo">
                </div>
                
                @error('correo')
                  <p><strong>{{$message}}</strong></p>
                @enderror 

                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Asunto" name="asunto">
                </div>

                @error('asunto')
                  <p><strong>{{$message}}</strong></p>
                @enderror 


                <div class="form-group">
                  <textarea name="mensaje" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
                </div>

                @error('mensaje')
                  <p><strong>{{$message}}</strong></p>
                @enderror 

                <div class="form-group">
                  <input type="submit" value="Enviar Mensaje" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            
            </div>
            <div class="col-md-6" id="map"></div>
          </div>
        </div>
      </section>
      
    @endsection
</x-home-master>