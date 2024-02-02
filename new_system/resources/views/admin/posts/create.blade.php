<x-admin-master>
@section('content')

    <h1>Create</h1>
    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" 
            name="titulo" 
            class="form-control" 
            id="titulo" 
            aria-describedby="" 
            placeholder="Enter Titulo">
        </div>

        <div class="form-group">
            <label for="file">file</label>
            <input type="file" 
            name="post_image" 
            class="form-control-file" 
            id="post_image" >    
        </div>


        <div class="form-group">
           <textarea name="body" 
           class="form-control"
           id="body" 
           cols="30" 
           rows="10"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

</x-admin-master>