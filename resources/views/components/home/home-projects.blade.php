<x-home-master>
@section('content')

<section class="home-slider owl-carousel js-fullheight">
  <div class="slider-item js-fullheight">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <p><a href="#" class="scroll">Hola! Mi nombre es</a></p>
          <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hector Narvaez</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="slider-item js-fullheight">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <p><a href="#" class="scroll">Soy de Colombia</a></p>
          <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">Desarrollador web</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="slider-item js-fullheight">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <p><a href="#" class="scroll">Soy ingeniero Electronico</a></p>
          <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">Desarrollador android</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="slider-item js-fullheight">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <p><a href="#" class="scroll">Me apasiona la programacion</a></p>
          <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">Automatizacion y IoT</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END slider -->

<section class="ftco-section about-section">
  <div class="container">
    <div class="row d-flex" data-scrollax-parent="true">
      <div class="col-md-4 author-img" style="background-image: url(images/foto_perfil.jpg);" data-scrollax=" properties: { translateY: '-70%'}"></div>
      <div class="col-md-2"></div>
      <div class="col-md-6 wrap ftco-animate">
        <div class="about-desc">
          <h1 class="bold-text">Sobre Mi</h1>
          <div class="p-5">
            <h2 class="mb-5">Hola! Hola mi nombre es Hector Narvaez</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in.</p>
            <p><a href="#">Checkout my resume</a></p>
            <ul class="ftco-footer-social list-unstyled mt-4">
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
            <h5>Contacta me aqui!</h5>
            <p>Correo: <a href="#">desarrollos@inghectornarvaez.com</a></p>
            <p>Celular: <a href="#">3188715792</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span>¿Que hago?</span>
        <h2>Mis servicios</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services p-3 py-4 d-block text-center">
          <div class="icon mb-3"><span class="icon-layers"></span></div>
          <div class="media-body">
            <h3 class="heading">UI/UX Design</h3>
            <h3 class="heading">Mobile App Design</h3>
            <h3 class="heading">Responsive Design</h3>
          </div>
        </div>      
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services p-3 py-4 d-block text-center">
          <div class="icon mb-3"><span class="icon-gears"></span></div>
          <div class="media-body">
            <h3 class="heading">Product Strategy</h3>
            <h3 class="heading">Design Sprints</h3>
            <h3 class="heading">UX Strategy</h3>
          </div>
        </div>      
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services p-3 py-4 d-block text-center">
          <div class="icon mb-3"><span class="icon-code"></span></div>
          <div class="media-body">
            <h3 class="heading">HTML/CSS</h3>
            <h3 class="heading">Prototyping</h3>
            <h3 class="heading">User Testing</h3>
          </div>
        </div>    
      </div>
    </div>
  </div>
</section>
{{-- Proyectos --}}
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span>Portfolio</span>
        <h2>Checkout a few of my works</h2>
      </div>
    </div>
    <div class="row no-gutters">

@foreach ($projects as $countP=>$project)
    

    <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
      @if ($countP%2==0)
      <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url({{$project->post_image}}); " data-scrollax=" properties: { translateY: '-30%'}">          
      @else
      <a href="portfolio-single.html" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url({{$project->post_image}}); " data-scrollax=" properties: { translateY: '-30%'}">
      @endif
        <div class="icon d-flex text-center justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
      @if ($countP%2==0)
      <div class="text">
      @else
      <div class="text order-1">
      @endif
        <h4 class="subheading">{{$project->category}}</h4>
        <h2 class="heading"><a href="portfolio-single.html">{{$project->title}}</a></h2>
        <p>{{Str::limit($project->body,'50','...')}}</p>
        <p><a href="{{route('project',$project->id)}}">View Project</a></p>
      </div>
    </div>
    
    @endforeach
  </div>
  </div>
</section>
<div class="d-flex">
  <div class="mx-auto">
    {{$projects->links()}} <!-- para la paginacion de los posts ya esta lista esta funcion-->
  </div>
</div>
<section class="ftco-section ftco-counter" id="section-counter">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span>Portfolio</span>
        <h2>I love to share my achievements</h2>
      </div>
    </div>
    <div class="row d-flex justify-content-start">
      <div class="col-md-5 col-sm-5 counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text">
            <span class="ftco-label">Clients</span>
            <strong class="number" data-number="420">0</strong>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-5 col-sm-5 counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text">
            <span class="ftco-label">Project done</span>
            <strong class="number" data-number="890">0</strong>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex justify-content-end">
      <div class="col-md-5 counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text">
            <span class="ftco-label">Cups of coffee</span>
            <strong class="number" data-number="1000">0</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
</x-home-master>