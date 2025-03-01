@php
    $faq_content = getMultipleContent('extensions_clip_hair_extensions_faq.element', true);
@endphp

@if ($faq_content)
    <!-- FAQ Section -->
    <section>
        <h2 class="text-[24px] font-bold text-center">FAQs</h2>
        <div id="faq-container" class="max-w-screen-xl px-4 mx-auto mt-8 flex flex-col gap-5">
            @foreach ($faq_content as $faq)
                @php
                    // Decode JSON data_values if it is a string
                    $dataValues = is_string($faq->data_values)
                        ? json_decode($faq->data_values)
                        : $faq->data_values;
                @endphp

                <!-- Ensure that dataValues is not null and contains 'title' and 'details' -->
                <div class="border-b border-gray-300">
                    <button
                        class="flex justify-between items-center font-bold text-[18px] w-full py-4 px-3 text-left text-lg border-x border-t border-[#D1DFEE]"
                        onclick="toggleFAQ(this)">
                        {{ $dataValues->title ?? 'Default Title' }}
                        <span class="icon transition-transform duration-300">+</span>
                    </button>

                    <div class="faq-answer overflow-hidden transition-all duration-300 border-x border-[#D1DFEE]"
                        style="height: 0;">
                        <div class="p-4 pb-4 text-[#444444] border-t border-[#D1DFEE]">
                            <p>{{ $dataValues->details ?? 'Default Details' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center py-5">
            <button id="toggle-faq"
                class="font-[20px] text-[#306AED] border-b border-[#306AED] scale-100 hover:scale-110 transition-all duration-300">
                More
            </button>
        </div>
    </section>
@endif
