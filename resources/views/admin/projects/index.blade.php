<x-admin-master>

    @section('content')
        <h1>Todos los proyectos</h1>
        @if (Session::has('message'))
        <div class="alert alert-danger">       
            {{Session::get('message')}}
        </div>

        @elseif(Session::has('project-created-message'))

        <div class="alert alert-success">       
            {{Session::get('project-created-message')}}
        </div>

        @elseif(Session::has('project-updated-message'))
        <div class="alert alert-success">
            {{Session::get('project-updated-message')}}
        </div>
        @endif
         <!-- DataTales Example -->
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Titulo</th>
                      <th>Categoria</th>
                      <th>Imagen</th>
                      <th>Fecha de creacion</th>
                      <th>Actualizado</th>
                      <th>Borrar</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Titulo</th>
                      <th>Categoria</th>
                      <th>Imagen</th>
                      <th>Fecha de creacion</th>
                      <th>Actualizado</th>
                      <th>Borrar</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($projects as $project)                            
                        <tr>
                            <td>{{$project->id}}</td>
                            <td><a href="{{route('project.edit',$project->id)}}">{{$project->title}}</a></td>
                            <td>{{$project->category}}</td>
                            <td>
                                <img height="100px" src="{{$project->post_image}}" alt="">
                            </td>
                            <td>{{$project->created_at->diffForHumans()}}</td>
                            <td>{{$project->updated_at->diffForHumans()}}</td>
                            <td>
                                <form method="post" action="{{route('project.destroy',$project->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="mx-auto">
              {{$projects->links()}} <!-- para la paginacion de los posts ya esta lista esta funcion-->
            </div>
          </div>
    @endsection
    @section('scripts')
        <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        {{-- <script src="{{asset('js/demo/datatables-demo.js')}}"></script> --}}
    @endsection
</x-admin-master>