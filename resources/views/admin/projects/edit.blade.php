<x-admin-master>
    @section('content')
        <h1>Editar post de proyecto</h1>
        <form method="post" action="{{route('project.update',$project->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="" value="{{$project->title}}" placeholder="Ingresa el titulo">
        </div>
        <div class="form-group">
            <label for="category">Categoria</label>
            <input type="text" name="category" class="form-control" id="category" value="{{$project->category}}" aria-describedby="" placeholder="Ingresa la categoria">
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" name="link" class="form-control" id="link" value="{{$project->link}}" aria-describedby="" placeholder="Ingresa un link (opcional)">
        </div>
        <div class="form-group">
            <label for="video">Video</label>
            <input type="text" name="video" class="form-control" id="video" value="{{$project->video}}" aria-describedby="" placeholder="Ingresa un link video youtube(opcional)">
        </div>
        <div class="form-group">
            <div><img height="100px" src="{{$project->post_image}} alt=""></div>
            <label for="file">Foto</label>
            <input type="file" name="post_image" class="form-control-file" id="post_image" >
        </div>
        <div class="form-group">
            <div><img height="100px" src="{{$project->post_second_image}} alt=""></div>
            <label for="file">Foto 2</label>
            <input type="file" name="post_second_image" class="form-control-file" id="post_second_image" >
        </div>
        <div class="form-group">
            <textarea name="body" class="form-control" id="body"  cols="30" rows="10">{{$project->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
        
    @endsection
</x-admin-master>