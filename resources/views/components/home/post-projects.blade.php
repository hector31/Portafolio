<x-home-master>
    @section('content')
    <section class="ftco-section">
      <div class="row" >
        <div class="col-sm-6 justify-content-center align-items-center d-flex" >
          <img class="img-post" src="{{$project->post_image}}" alt="">
        </div>
        <div class="col-sm-6 text-post-only">
          <h4 class="subheading">{{$project->category}}</h4>
              <h2 class="heading">{{$project->title}}</h2>
              <p>{{$project->body}}</p>
              <p><a target="_blank" href="{{$project->link}}">{{$project->link}}</a></p>
        </div>
      </div>
      
        @if ($project->post_second_image!=null)
            
        <div class="espacio-div justify-content-center align-items-center d-flex ">
          <img width="90%" src="{{$project->post_second_image}}" alt="">
        </div>
        @endif

        @if ($project->video!=null)
        <div class="espacio-div justify-content-center align-items-center d-flex video-responsive">
          <iframe src="{{$project->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        @endif
      </section>
    @endsection
</x-home-master>