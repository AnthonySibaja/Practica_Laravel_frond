<x-admin-master>
    @section('content')
    
        <h1>Edit a Post</h1>

        <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" 
                name="titulo" 
                class="form-control" 
                id="titulo" 
                aria-describedby="" 
                placeholder="Enter Titulo"
                value="{{$post->titulo}}"
                >
            </div>
    
            <div class="form-group">
                <div><img height="100px" src="{{$post->post_image}}" alt=""></div>
                <label for="file">Image</label>
                <input type="file" 
                name="post_image" 
                class="form-control-file" 
                id="post_image">
            </div>
    
    
            <textarea name="body" class="form-control" id="body" cols="30" rows="10">{{ $post->body }}</textarea>

    
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
    @endsection
    
    </x-admin-master>