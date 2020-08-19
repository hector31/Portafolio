<x-home-master>
    @section('content')
    
    <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
    
        <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url({{$project->post_image}}); " data-scrollax=" properties: { translateY: '-30%'}">          
        <div class="icon d-flex text-center justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
    
        <div class="text">
        
          <h4 class="subheading">{{$project->category}}</h4>
          <h2 class="heading"><a href="portfolio-single.html">{{$project->title}}</a></h2>
          <p>{{$project->body}}</p>
        </div>
      </div>
    @endsection
</x-home-master>