<x-layouts.app title="home" meta-description="home meta description">

    <form action="{{route('agregar.store')}}" class="container" method="POST">
        @csrf
        <h1 class="text-center">agregar un nuevo usuario</h1>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="nombre" class="form-control" id="nombre" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="apellido" class="form-control" id="apellido">
        </div>
        <div class="mb-3">
            <label for="celular" class="form-label">Celular::</label>
            <input type="celular" class="form-control" id="celular">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('home')}}" class="btn btn-danger">Regresar</a>
    </form>

</x-layouts.app>