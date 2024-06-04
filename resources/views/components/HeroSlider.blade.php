<div class="swiper hero-carousel w-full h-[93vh] bg-gray-500 relative">
    <div class="swiper-wrapper">
        <h1 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-5xl font-bold z-50">Tutaj będzie nagłówek</h1>

        @foreach ($headerSlides as $slide)
            {
            <div class="swiper-slide w-full h-full relative">
                <img src="{{ '/storage/' . $slide['image'] }}" alt="{{ $slide['alt'] }}"
                    class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-black opacity-30"></div>
            </div>
            }
        @endforeach

        <button class="absolute bottom-12 left-1/2 transform -translate-x-1/2 z-50">
            click
        </button>
    </div>
</div>
