@extends ('template.template')

@section('content')


            <form method="post" action="add">

            <p><input name="title" type="text" placeholder="Заголовок" size="20" ></p><br />

            <textarea name="body" cols="40" rows="15" placeholder="Введите текст"></textarea>

            <p><input type="submit" value="Добавить пост"></p>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            </form>





    @if (isset($posts) && count($posts))

        @foreach($posts as $post)

            <section>

                <h3 class="post-title"><a href="show/{{ $post->id }}">{{ $post->title }}</a></h3>

                <img class="post-preview" src="{{ $post->preview }}" alt="{{ $post->title }}"/>

                <p class="post-body">{{ $post->body }}</p>

                <p><a href="#">{{ $post->author }}</a></p>

                <section style="clear: both"></section>

            </section>

        @endforeach

    @else

        <p>Нет записей в базе</p>

    @endif

@stop