<x-layouts.Main>

  <x-HeroSlider :headerSlides="$headerSlides"/>
    
<main>

  @include('home.sections.1_about')
  @include('home.sections.3_offers')
</main>
  
  <div>
    <h2 class="text-7xl mt-24 font-bold uppercase text-center">zalety</h2>
      @foreach ($advantages as $advantage)
      <div class=" flex flex-col  justify-center items-center gap-12 py-6">
        
        <h2>{{$advantage['title']}}</h2>
        <img src="{{asset('/storage/'. $advantage['image'])}}" alt="{{$advantage['title']}}" class="w-[400px]">
        <p>{!!$advantage['description']!!}</p>
      </div>
        @endforeach
    </div>




    
    
</x-layouts.Main>