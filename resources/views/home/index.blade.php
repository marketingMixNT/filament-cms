<x-layouts.Main>

  <x-HeroSlider :headerSlides="$headerSlides"/>
    
    <p>test</p>
    {{-- @foreach ($apartments as $apartment)
    <div class="border flex flex-col justify-center items-center gap-12">
        
        <h2>{{$apartment['name']}}</h2>
        <img src="{{asset('/storage/'. $apartment['thumbnail'])}}" alt="{{$apartment['name']}}" class="w-[400px]">
        <p>{!!$apartment['description']!!}</p>
        @endforeach
    </div> --}}
    
</x-layouts.Main>