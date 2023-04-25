@unless(count($posts) == 0)
    @foreach($posts as $post)
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>

        @if(count($post->tags) != 0)
            <ul>
                @foreach($post->tags as $tag)
                    <li>{{ $tag->name }}</li>
                @endforeach
            </ul>
        @endif
    @endforeach
@endunless

