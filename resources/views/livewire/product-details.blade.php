<div>
    <div class="flex gap-5 p-20 mx-auto max-w-screen-xl items-center px-4 sm:px-6 lg:px-8">
        <div>
            <img src="{{ $product->image ? Storage::url($product->image) : asset('images/4.png')}}" alt="product-images"
                class="aspect-square w-full rounded object-cover" />
        </div>
        <div>
            <h2 class="p-1 font-medium text-2xl line-clamp-2">{{$product->name}}</h2>
            <h2 class="p-2 line-clamp-2">{{$product->description}}</h2>
            <div class="flex gap-5 px-3 justify-between items-center mb-5 ">
                <div class="bg-gray-500 px-2 rounded text-white">{{$product->category->name}}</div>
                <h1>Price <span> ${{$product->price}} </span></h1>

            </div>
            @if (auth()->check())
                <button wire:click="addToCart{{$product->id}">
                    <div
                        class="flex gap-2 justify-center w-full rounded bg-blue-600 px-12 py-2 text-sm font-medium text-white text-center shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        <span>Add to cart</span>
                </button>
            @else
                <a wire:navigate class="" href="/auth/login">
                    <div
                        class="flex gap-2 justify-center w-full rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                        Add to cart
                    </div>
                </a>

            @endif
        </div>

    </div>

    <div class="mx-auto max-w-screen-xl items-center px-4 sm:px-6 lg:px-8">
        <h1 class=" my-5 px-20 pt-5 ">Releted Products</h1>
        <livewire:product-iteam :category_id="$product->category_id" :current_product_id="$product->id" />
    </div>
</div>