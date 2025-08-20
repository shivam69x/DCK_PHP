<section
    id="home"
    class="relative bg-gradient-to-br from-[#dff6fd] to-[#f7fafe] h-auto min-h-[500px] overflow-hidden"
    x-data="{
        currentSlide: 0,
        slides: [
            {
                id: 1,
                heading: 'Fast, secure and reliable web hosting',
                paragraph: 'Elevate your business with cutting-edge web solutions that drive growth, enhance user experience, and deliver measurable results in today\'s competitive digital landscape.',
                image: '{{ asset('assets/hero10.png') }}',
            },
            {
                id: 2,
                heading: 'Innovative Cloud Solutions',
                paragraph: 'Scale your infrastructure with enterprise-grade cloud services designed for modern businesses. Experience unmatched reliability, security, and performance optimization.',
                image: '{{ asset('assets/hero20.png') }}',
            },
            {
                id: 3,
                heading: 'Data-Driven Success',
                paragraph: 'Unlock the power of analytics and artificial intelligence to make informed decisions, optimize operations, and stay ahead of market trends with our advanced platform.',
                image: '{{ asset('assets/hero30.png') }}',
            },
        ],
        init() {
            setInterval(() => {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            }, 5000);
        },
        goToPrevious() {
            this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
        },
        goToNext() {
            this.currentSlide = (this.currentSlide + 1) % this.slides.length;
        }
    }"
>
    <div class="container mx-auto px-4 sm:px-6 lg:px-12 py-10 relative">
        {{-- Carousel Container --}}
        <div class="relative w-full h-full flex items-center">
            <div class="w-full h-full flex items-center">
                <template x-for="(slide, index) in slides" :key="slide.id">
                    <div
                        :class="{
                            'translate-x-0 opacity-100': index === currentSlide,
                            '-translate-x-full opacity-0': index < currentSlide,
                            'translate-x-full opacity-0': index > currentSlide
                        }"
                        class="absolute inset-0 w-full transition-all duration-700 ease-in-out transform"
                    >
                        <div class="flex flex-col lg:grid lg:grid-cols-2 gap-8 h-full items-center">
                            {{-- Text --}}
                            <div class="flex flex-col justify-center space-y-6 text-center lg:text-left">
                                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#0e3c47]" x-text="slide.heading"></h1>
                                <p class="text-sm sm:text-base lg:text-lg text-[#0e3c47cc] max-w-xl mx-auto lg:mx-0" x-text="slide.paragraph"></p>
                            </div>

                            {{-- Image --}}
                            <div class="flex justify-center lg:justify-end items-center mt-6 lg:mt-0 animate-gentle-bounce">
                                <img
                                    :src="slide.image"
                                    :alt="`Slide ${slide.id}`"
                                    class="w-full max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl h-auto object-contain"
                                />
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        {{-- Navigation Controls (moved to bottom) --}}
        <div class="w-full flex justify-center mt-[300px]">
            <div class="flex space-x-4">
                <button
                    @click="goToPrevious()"
                    class="p-3 rounded-full bg-white/30 backdrop-blur-sm hover:bg-white/50 transition-all duration-300 text-[#94a3b2]"
                    aria-label="Previous slide"
                >
                    {{-- ChevronLeft icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left"><path d="m15 18-6-6 6-6"/></svg>
                </button>
                <button
                    @click="goToNext()"
                    class="p-3 rounded-full bg-white/30 backdrop-blur-sm hover:bg-white/50 transition-all duration-300 text-[#94a3b2]"
                    aria-label="Next slide"
                >
                    {{-- ChevronRight icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </button>
            </div>
        </div>
    </div>
</section>
