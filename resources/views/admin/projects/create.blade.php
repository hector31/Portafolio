<x-admin-master>
    @section('content')

        <form method="post" action="{{route('project.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="" placeholder="Ingresa el titulo">
        </div>
        <div class="form-group">
            <label for="category">Categoria</label>
            <input type="text" name="category" class="form-control" id="category" aria-describedby="" placeholder="Ingresa la categoria">
        </div>
        <div class="form-group">
            <label for="file">Foto</label>
            <input type="file" name="post_image" class="form-control-file" id="post_image" >
        </div>
        <div class="form-group">
            <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        </form>
        
    @endsection
</x-admin-master>