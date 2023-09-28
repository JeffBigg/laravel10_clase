<x-layouts.app title="contact" meta-description="contact meta description">
    <h1>contact</h1>
    @foreach($posts as $post)
        <h2>{{$post->name}}</h2>
    @endforeach
</x-layouts.app>