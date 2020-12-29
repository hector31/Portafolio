<x-home-master>
    @section('content')
    <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <span>Portafolio</span>
              <h2>Revisa los proyectos que he realizado</h2>
            </div>
          </div>
          <div class="row no-gutters">
      
      @foreach ($projects as $countP=>$project)
          
      
      <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
        @if ($countP%2==0)
        <a href="{{route('project',$project->id)}}" class="image d-flex justify-content-center align-items-center" style="background-image: url({{$project->post_image}}); " data-scrollax=" properties: { translateY: '-30%'}">          
        @else
        <a href="{{route('project',$project->id)}}" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url({{$project->post_image}}); " data-scrollax=" properties: { translateY: '-30%'}">
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
          <h2 class="heading"><a href="{{route('project',$project->id)}}">{{$project->title}}</a></h2>
          <p class="justificar">{{Str::limit($project->body,'120','...')}}</p>
          <p><a href="{{route('project',$project->id)}}">Mirar proyecto</a></p>
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
    @endsection
</x-home-master>