<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="bg-gray-100">
        <a href="/product/details?">
            <div class="">
                <div>
                    <img src="https://images.unsplash.com/photo-1592921870789-04563d55041c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                        alt="product-images" class="aspect-square w-full rounded object-cover" />
                </div>
                <div class=" ">
                    <h2 class="p-2 line-clamp-2 ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem
                        laborum quaerat, eos similique
                        quia voluptas quo ea quam architecto consequuntur at amet magni modi nostrum et expedita
                        recusandae
                        voluptatum ducimus. Blanditiis, inventore delectus nostrum quas similique nulla, hic dicta eius
                        harum nam aspernatur totam odit soluta ducimus. Quam, perspiciatis ducimus.</h2>
                    <div class="flex gap-5 px-3 justify-between items-center mb-5 ">
                        <div class="bg-gray-500 px-2 rounded text-white">Outfit</div>
                        <h1>Price <span> $30 </span></h1>

                    </div>
                    <div
                        class="flex gap-2 justify-center w-full rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>


                        <a class="" href="{{auth()->check() ? '/add/to/card' : '/auth/login'}}">
                            Add to cart
                        </a>
                    </div>
                </div>

            </div>
        </a>
    </div>
</body>

</html>