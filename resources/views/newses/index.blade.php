<x-layouts.Main>

    <main class="pt-44">

        @foreach ($newses as $news)
        
        <h2>{{$news->title}}</h2>
        <p>{!!$news->content!!}</p>
        @endforeach
    </main>

</x-layouts.Main>