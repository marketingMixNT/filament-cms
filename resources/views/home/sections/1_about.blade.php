
<section id="o-nas" class="pt-36">

<div class="text-center pb-24">
    
    <x-Heading title="Piękne miejsce w Tatrach" subtitle="Intymna atmosfera i najwyzszy komfort w harmonii z dzika natura" colorSubtitle='text-fontPrimary'/>
</div>    


<div class="px-44 mx-auto relative">

    <div class="swiper advantages-carousel">
        <div class="swiper-wrapper ">
            @foreach ($advantages as $advantage)
            <div class="swiper-slide max-h-[700px] w-full relative"><img src="{{asset('storage/' . $advantage['image'])}}" alt="" class="h-full w-full object-contain">
            
                <div class=" bg-white absolute z-50 left-0 top-[50%] bottom-0 right-[75%] px-20 pt-10 flex flex-col justify-start items-start gap-6">
                   <h2 class="font-heading text-3xl">{{$advantage['title']}}</h2>
                   <p class="text-lg">
                    {{$advantage['description']}}
                   </p>
                   <div class=" absolute right-0 bottom-0 flex gap-1">

                      
                       <button class="advantages-prev bg-black hover:bg-primary-400 duration-500  p-3"><img src="{{asset('/icons/arrow-left.svg')}}" alt="" class="w-7"></button>
                       <button class="advantages-next bg-black hover:bg-primary-400  duration-500 p-3"><img src="{{asset('/icons/arrow-right.svg')}}" alt="" class="w-7"></button>
                    </div>
                    </div>
            </div>
            @endforeach
        
        </div>
       
      </div>
     

</div>
</section>