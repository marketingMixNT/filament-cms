<x-layouts.Main>

  <x-HeroSlider :headerSlides="$headerSlides"/>
    
  
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


    @foreach ($attractions as $i)
      <p>{{$i['title']}}</p>
    @endforeach

    <div>
      <h2 class="text-7xl mt-24 font-bold uppercase text-center">Oferty</h2>
        @foreach ($offers as $offer)
        <div class=" flex flex-col  justify-center items-center gap-12 py-6">
          <h2 class="font-bold text-2xl">Cena od {{$offer['price']}} zł</h2>
          <h2 class="font-xl font-semibold">{{$offer['title']}}</h2>
          <img src="{{asset('/storage/'. $offer['thumbnail'])}}" alt="{{$offer['title']}}" class="w-[400px]">
          <p>{!!$offer['description']!!}</p>
          <p>min. {{$offer['nights']}} noce</p>
          <p>{{$offer['food']}}</p>
        </div>
          @endforeach
      </div>
    
</x-layouts.Main>