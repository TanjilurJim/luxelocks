<!-- quote.blade.php -->
@extends('Template::layouts.master')
@section('content')

    {{-- @if (session('success'))
        <div class="alert alert-success mb-4">
            {{ session('success') }}
        </div>
    @endif --}}
    <section class="max-w-screen-xl mx-auto px-4 lg:py-20 md:py-10 py-5">
        <h1 class="text-[26px] text-[#212529]">Request a Quote</h1>
        <div class="flex flex-col gap-6">

            {{-- If cart is empty, show a "No items" message; otherwise show the cart. --}}
            @if (count($cartProducts) === 0)
                <div class="bg-[#F7F6F7] p-5 border-t-2 border-[#306AED]">
                    <span class="font-semibold text-[#515151]">You currently have no items in your quote list</span>
                </div>
                <div>
                    <a href="{{ route('home') }}"
                        class="border border-[#306AED] bg-[#306AED] text-white font-semibold px-[30px] py-[10px] rounded hover:bg-white hover:text-[#306AED] transition-all duration-300">
                        Return to Shop
                    </a>
                </div>
            @else
                <!-- CART FORM -->
                <form action="{{ route('cart.update') }}" method="POST">
                    @csrf
                    <div class="border border-gray-300 w-full overflow-x-auto">
                        <div class="bg-gray-100 flex justify-between px-4 py-2">
                            <span class="w-1/2 font-semibold text-center">Product</span>
                            <span class="w-1/4 font-semibold text-center">Quantity</span>
                        </div>

                        @foreach ($cartProducts as $key => $item)
                            <div class="border-t border-gray-300 flex flex-wrap items-center justify-between px-10 py-4 gap-4 product-item"
                                data-key="{{ $key }}">

                                <!-- Remove Button -->
                                <div class="flex items-center gap-5">
                                    <a href="{{ route('cart.remove', $item['product']->id) }}"
                                        class="text-gray-500 hover:text-red-500 text-xl border px-2 rounded-full transition duration-300">
                                        &times;
                                    </a>
                                    <img src="{{ $item['product']->mainImage(false) }}" alt="Product Image"
                                        class="w-16 h-16 object-cover rounded">
                                </div>

                                <!-- Product Name, Variant, and Base Size -->
                                <div class="flex-1">
                                    <a href="#" class="text-blue-600 hover:underline">
                                        {{ $item['product']->name }}
                                        @if (is_object($item['variant']))
                                            ({{ $item['variant']->name }})
                                        @endif
                                    </a>
                                    <p class="text-sm text-gray-500">
                                        <strong>Base Size:</strong> {{ $item['base_size'] }}
                                    </p>
                                </div>

                                <!-- Quantity Controls -->
                                <div class="flex items-center gap-2 border border-gray-300 rounded-md px-2 py-1">
                                    <button type="button" onclick="updateQuantity(this, -1)"
                                        class="w-8 h-8 flex items-center justify-center border-r pr-1 border-gray-300">
                                        -
                                    </button>

                                    <input type="number" name="quantities[{{ $item['product']->id }}]"
                                        value="{{ $item['quantity'] }}" min="1"
                                        class="quantityInput w-12 text-center focus:outline-none" readonly />

                                    <button type="button" onclick="updateQuantity(this, 1)"
                                        class="w-8 h-8 flex items-center justify-center border-l pl-1 border-gray-300">
                                        +
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- The "Update List" button now SUBMITS THE FORM -->
                    <div class="mt-4">
                        <button type="submit"
                            class="border border-[#306AED] bg-[#306AED] text-white font-semibold px-[30px] py-[10px] rounded hover:bg-white hover:text-[#306AED] transition-all duration-300">
                            Update list
                        </button>
                    </div>
                </form>



                <!-- REQUEST QUOTE FORM -->
                <!-- REQUEST QUOTE FORM -->
                <form action="{{ route('quote.request') }}" method="POST">
                    @csrf

                    <!-- Row: First/Last Name -->
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-10 gap-5 md:mb-10 mb-5">
                        <div class="flex flex-col w-full">
                            <label class="text-[14px] font-bold" for="first_name">First name: <span
                                    class="text-red-500">*</span></label>
                            <input class="px-2 py-2.5 w-full border" id="first_name" name="first_name" type="text"
                                required>
                        </div>
                        <div class="flex flex-col w-full">
                            <label class="text-[14px] font-bold" for="last_name">Last name: <span
                                    class="text-red-500">*</span></label>
                            <input class="px-2 py-2.5 w-full border" id="last_name" name="last_name" type="text"
                                required>
                        </div>
                    </div>

                    <!-- Row: Email / Address -->
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-10 gap-5 md:mb-10 mb-5">
                        <div class="flex flex-col w-full">
                            <label class="text-[14px] font-bold" for="email">Email address: <span
                                    class="text-red-500">*</span></label>
                            <input class="px-2 py-2.5 w-full border" id="email" name="email" type="email" required>
                        </div>
                        <div class="flex flex-col w-full">
                            <label class="text-[14px] font-bold" for="address">Address: <span
                                    class="text-red-500">*</span></label>
                            <input class="px-2 py-2.5 w-full border" id="address" name="address" type="text"required>
                        </div>
                    </div>

                    <!-- Row: Country / State -->
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-10 gap-5 md:mb-10 mb-5">
                        <div class="flex flex-col w-full">
                            <label class="text-[14px] font-bold" for="country">Country: <span
                                    class="text-red-500">*</span></label>
                            <input class="px-2 py-2.5 w-full border" id="country" name="country" type="text"required>
                        </div>
                        <div class="flex flex-col w-full">
                            <label class="text-[14px] font-bold" for="state">State: <span
                                    class="text-red-500">*</span></label>
                            <input class="px-2 py-2.5 w-full border" id="state" name="state" type="text"required>
                        </div>
                    </div>

                    <!-- Row: City / Postcode -->
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-10 gap-5 md:mb-10 mb-5">
                        <div class="flex flex-col w-full">
                            <label class="text-[14px] font-bold" for="city">City: <span
                                    class="text-red-500">*</span></label>
                            <input class="px-2 py-2.5 w-full border" id="city" name="city"
                                type="text"required>
                        </div>
                        <div class="flex flex-col w-full">
                            <label class="text-[14px] font-bold" for="postcode">Postcode / ZIP: <span
                                    class="text-red-500">*</span></label>
                            <input class="px-2 py-2.5 w-full border" id="postcode" name="postcode"
                                type="text"required>
                        </div>
                    </div>

                    <!-- Row: Phone / Business Name -->
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-10 gap-5 md:mb-10 mb-5">
                        <div class="flex flex-col w-full">
                            <label class="text-[14px] font-bold" for="phone">Phone/Whatsapp: <span
                                    class="text-red-500">*</span></label>
                            <input class="px-2 py-2.5 w-full border" id="phone" name="phone"
                                type="text"required>
                        </div>
                        <div class="flex flex-col w-full">
                            <label class="text-[14px] font-bold" for="business_name">Business Name: <span
                                    class="text-red-500">*</span></label>
                            <input class="px-2 py-2.5 w-full border" id="business_name" name="business_name"
                                type="text"required>
                        </div>
                    </div>

                    <!-- Row: Business Type / License Type -->
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-10 gap-5 md:mb-10 mb-5">
                        <div class="flex flex-col w-full">
                            <label class="text-[14px] font-bold" for="business_type">Business Type: <span
                                    class="text-red-500">*</span></label>
                            <input class="px-2 py-2.5 w-full border" id="business_type" name="business_type"
                                type="text"required>
                        </div>
                        <div class="flex flex-col w-full">
                            <label class="text-[14px] font-bold" for="license_type">License Type: <span
                                    class="text-red-500">*</span></label>
                            <input class="px-2 py-2.5 w-full border" id="license_type" name="license_type"
                                type="text"required>
                        </div>
                    </div>

                    <!-- Row: License Number -->
                    <div class="flex flex-col w-full md:mb-10 mb-5">
                        <label class="text-[14px] font-bold" for="license_number">License Number: <span
                                class="text-red-500">*</span></label>
                        <input class="px-2 py-2.5 w-full border" id="license_number" name="license_number"
                            type="text"required>
                    </div>

                    <!-- Message / Comments -->
                    <div class="flex flex-col w-full md:mb-10 mb-5">
                        <label class="text-[14px] font-bold" for="message">Message: <span
                                class="text-red-500">*</span></label>
                        <textarea class="px-2 py-2.5 w-full border" id="message" name="message"required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-5">
                        <button
                            class="border border-[#306AED] bg-[#306AED] text-white font-semibold px-[30px] py-[10px] rounded hover:bg-white hover:text-[#306AED] transition-all duration-300"
                            type="submit">
                            Request quote
                        </button>
                    </div>
                </form>
            @endif

        </div>
    </section>
    <script>
        // Update Quantity
        function updateQuantity(button, change) {
            // Find the <input> with class "quantityInput"
            const quantityInput = button.parentElement.querySelector('.quantityInput');

            // Read the current value from the input
            let quantity = parseInt(quantityInput.value);

            // Increment or decrement
            quantity = Math.max(1, quantity + change);

            // Write the updated value back to the input
            quantityInput.value = quantity;
        }

        // Remove Item
        function removeItem(button) {
            const item = button.closest('.product-item');
            if (item) {
                item.remove();
            }
        }
    </script>
@endsection
