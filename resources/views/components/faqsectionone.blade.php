<section id="faq" class="max-w-[1150px] flex justify-center m-auto py-12 border border-slate-300 bg-white rounded-2xl mt-16 bg-gradient-to-t from-sky-200 shadow-md">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-16">
            <h2 class="text-3xl font-manrope text-center font-bold text-gray-900 leading-[3.25rem]">
                Frequently asked questions
            </h2>
        </div>

        <div class="accordion-group">
            @php
                $faqs = [
                    [
                        'question' => 'What makes DC Keepers different from other hosting providers?',
                        'answer' => 'At DC Keepers, we offer the customized plans according to the client business goals. Support team will always be available to resolve your queries.',
                    ],
                    [
                        'question' => 'How do I know which hosting service is right for my business?',
                        'answer' => 'Choosing the right hosting service or plan depends on your business needs. If you are an entrepreneur shared hosting might be a good option for you, if you\'re scaling up or a giant enterprise the you can proceed with Cloud or VPS hosting solutions. Our team can help you to choose the specific plan according to your needs.',
                    ],
                    [
                        'question' => 'Do you offer support if I run into technical issues?',
                        'answer' => 'Yes, Our support team is available 24/7 to help with any technical issues or queries related to the services. Support team will help you with setting up your hosting or facing issues after set-up.',
                    ],
                    [
                        'question' => 'Are your services secure?',
                        'answer' => 'Yes, Security is a our top priority at DC Keepers. We use latest technologies and best practices to protect your data/websites and make sure that your services are safe with us & from online threats.',
                    ],
                    [
                        'question' => 'What payment methods do you accept?',
                        'answer' => 'We accept payments through credit cards, PayPal & UPI. If you need any other payment option, feel free to contact us.',
                    ],
                    [
                        'question' => 'Can I migrate my existing website to DC Keepers?',
                        'answer' => 'Yes, we do offer website migration services from cPanel/Plesk panel. Our team will be working with you to ensure the minimal downtime while migrating the website. If you have any other panel or queries related to migration please feel free contact us.',
                    ],
                ];
            @endphp

            @foreach ($faqs as $index => $faq)
                <div
                    x-data="{ isOpen: false }"
                    class="accordion border border-solid border-gray-300 p-4 rounded-xl mb-8 lg:p-4 transition duration-500"
                    :class="{ 'bg-indigo-50 border-indigo-600': isOpen }"
                >
                    <button
                        @click="isOpen = !isOpen"
                        class="px-6 accordion-toggle group inline-flex items-center justify-between text-left text-lg font-semibold leading-8 text-gray-900 w-full transition duration-500 hover:text-indigo-600"
                        :class="{ 'font-medium text-indigo-600': isOpen }"
                    >
                        <h5>{{ $faq['question'] }}</h5>
                        <template x-if="isOpen">
                            {{-- Minus icon --}}
                            <svg class="w-6 h-6 text-gray-900 group-hover:text-indigo-600" viewBox="0 0 24 24" fill="none">
                                <path d="M6 12H18" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </template>
                        <template x-if="!isOpen">
                            {{-- Plus icon --}}
                            <svg class="w-6 h-6 text-gray-900 group-hover:text-indigo-600" viewBox="0 0 24 24" fill="none">
                                <path d="M6 12H18M12 18V6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </template>
                    </button>

                    <div x-show="isOpen" x-cloak class="accordion-content w-full overflow-hidden pr-4 mt-4">
                        <p class="text-base text-gray-900 font-normal leading-6">
                            {{ $faq['answer'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
