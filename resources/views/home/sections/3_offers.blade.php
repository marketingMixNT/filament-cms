<section id="o-nas" class="py-36">

    <div class="text-center pb-32">

        <x-Heading title="Doświadcz niezapomnianej przygody" subtitle="Poznaj nasze propozycje na pobyt"
            colorSubtitle='text-fontPrimary' />
    </div>

    <div class="max-w-screen-xl mx-auto relative">

        <div class="swiper offer-carousel">
            <div class="swiper-wrapper ">
                @foreach ($offers as $offer)
                <div class="swiper-slide flex flex-col">
                    <div class="bg-white h-[400px] shadow-2xl">
                        <img src="{{asset('/storage/'. $offer['thumbnail'])}}" alt="{{$offer['title']}}" class="w-full h-full object-cover p-6">
                    </div>
                    <div class="flex flex-col justify-between gap-12 py-12">
                        <span class="font-light">od <span class="text-3xl mx-2 text-fontPrimary font-bold">{{$offer['price']}}zł</span>  za noc</span>
                        <h2 class="font-2xl font-bold">{{$offer['title']}}</h2>
                        <button>Zobacz szczegóły</button>
                    </div>

                </div>
                @endforeach
               
            </div>
            {{-- <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> --}}
        </div>


    </div>

</section>

{{-- <div>
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

    </div> --}}