<x-layouts.app title="contact" meta-description="contact meta description">
    <h1>contact</h1>
<table class="table table-striped">
  <thead>
    
    <tr>
      <th scope="col">#</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">CELULAR</th>
      <th scope="col">CORREO</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th>{{$post->id}}</th>
      <td>{{$post->name}}</td>
      <td>{{$post->fullname}}</td>
      <td>{{$post->cellphone}}</td>
      <td>{{$post->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</x-layouts.app>