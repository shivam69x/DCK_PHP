<section class="m-auto max-w-[1400px] flex justify-center items-center py-0 px-6 relative xl:mr-0 lg:mr-5 mr-0 border border-slate-300 bg-white rounded-2xl mt-5 bg-gradient-to-b from-sky-100 shadow-md">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full justify-start items-center xl:gap-12 gap-10 grid lg:grid-cols-2 grid-cols-1">

            {{-- Vision Image --}}
            <div class="w-full lg:justify-start justify-center items-start flex">
                <div class="sm:w-[500px] w-full sm:h-[280px] h-full relative">
                    <img
                        class="sm:mt-5 sm:ml- w-full h-full rounded-3xl object-cover"
                        src="{{ asset('assets/vision1.png') }}"
                        alt="Our Vision"
                    />
                </div>
            </div>

            {{-- Vision Content --}}
            <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex mt-3">
                <div class="w-full flex-col justify-center items-start gap-8 flex">
                    <div class="flex-col justify-start lg:items-start items-center gap-4 flex">
                        <div>
                            <h3 class="underline text-xl font-bold text-gray-900">
                                Our Vision
                            </h3>

                            <p class="text-gray-700 text-base font-normal mt-[14px]">
                                is to ensure uninterrupted, authentic and secure digital
                                operations for businesses worldwide. We endeavor to set new
                                standards in service excellence through innovative
                                technology and steady support. Empowering success and
                                building trust is at the heart of everything we do.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full justify-start items-center xl:gap-12 gap-10 grid lg:grid-cols-2 grid-cols-1">
            {{-- Mission Content --}}
            <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                <div class="w-full flex-col justify-center items-start gap-8 flex">
                    <div class="flex-col justify-start lg:items-start items-center gap-4 flex">
                        <div>
                            <h3 class="underline text-xl font-bold text-gray-900 mb-3">
                                Our Mission
                            </h3>

                            <p class="text-gray-700 text-base font-normal">
                                While working with us we make sure your business has
                                everything it needs to succeed online. We take the time to
                                understand your needs then deliver solutions that fit your
                                goals, all backed by reliable, expert support.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mission Image --}}
            <div class="w-full lg:justify-start justify-center items-start flex">
                <div class="sm:w-[500px] w-full sm:h-[380px] h-full relative">
                    <img
                        class="sm:mt-5 sm:ml- w-full h-full rounded-3xl object-cover"
                        src="{{ asset('assets/mission2.png') }}"
                        alt="Our Mission"
                    />
                </div>
            </div>
        </div>
    </div>
</section>
