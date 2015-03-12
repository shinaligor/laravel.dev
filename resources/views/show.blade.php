@extends ('template.template')

@section('content')

    <section class="post">

        <h3 class="post-title">{{ $post->title }}</h3>

        <img class="post-preview" src="{{ $post->preview }}" alt=""/>

        <p class="post-body">{{ $post->body }}</p>

        <p><a href="#">{{ $post->author }}</a></p>

        <section style="clear: both"></section>

        <a href="/main/">&larr; Вернуться</a>

    </section>

@stop