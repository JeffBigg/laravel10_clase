<x-layouts.app title="home" meta-description="home meta description">
    <h1>editar formulario</h1>
    <form action="{{route('actualizar',$post->id)}}" class="container" method="POST">
        @csrf
        <h1 class="text-center">agregar un nuevo usuario</h1>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input name="nombre" class="form-control" value="{{$post->name}}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input name="apellido" class="form-control" value="{{$post->fullname)}}">
        </div>
        <div class="mb-3">
            <label for="celular" class="form-label">Celular::</label>
            <input name="celular" class="form-control" value="{{$post->cellphone)}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input name="email" class="form-control" value="{{$post->email)}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('home')}}" class="btn btn-danger">Regresar</a>
    </form>
</x-layouts.app>