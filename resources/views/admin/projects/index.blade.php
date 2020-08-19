<x-admin-master>
    @section('content')
        <h1>Todos los proyectos</h1>
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
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($projects as $project)                            
                        <tr>
                            <td>{{$project->id}}</td>
                            <td>{{$project->title}}</td>
                            <td>{{$project->category}}</td>
                            <td>
                                <img height="100px" src="{{$project->post_image}}" alt="">
                            </td>
                            <td>{{$project->created_at->diffForHumans()}}</td>
                            <td>{{$project->updated_at->diffForHumans()}}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    @endsection
    @section('scripts')
        <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    @endsection
</x-admin-master>