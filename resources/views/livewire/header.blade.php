<header class="bg-white shadow-sm">
  <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
    <a class="block text-teal-600" href="/">
      <span class="sr-only">Home</span>
       <img src="/public/images/logos.png" alt="logo-Exclusive">
    </a>

    <div class="flex flex-1 items-center justify-end md:justify-between">
      <nav aria-label="Global" class="hidden md:block">
        <ul class="flex items-center gap-6 text-sm">
            
            <li>
                <a class="text-gray-500 {{Request::is('/') ? 'text-gray-700 font-bold' : ''}} transition hover:text-gray-500/75" href="/"> Home </a>
            </li>
            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Contact  </a>
            </li>
            
            <li>
              <a class="text-gray-500 {{Request::is('/about') ? 'text-gray-700 font-bold' : ''}} transition hover:text-gray-500/75" href="/about"> About </a>
            </li>

          <li>
            <a class="text-gray-500 transition hover:text-gray-500/75" href="/auth/register"> Sign Up </a>
          </li>
          <li>
            <a class="text-gray-500 transition hover:text-gray-500/75" href="/admin/deshboard"> Deshbord </a>
          </li>
        </ul>
      </nav>

      <div class="flex items-center gap-4">
        <div class="sm:flex sm:gap-4">
          @if (auth()->check()) 
            <livewire:shopping-cart-icon/>
            <a href="/auth/logout">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                </svg>
              </a>
          @else
          <a
            class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700"
            href="/auth/login"
          >
            Login
          </a>
            @endif 
          <!-- <a
            class="hidden rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75 sm:block"
            href="/auth/register"
          >
            Register
          </a> -->
           

          
        </div>

        <button
          class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden"
        >
          <span class="sr-only">Toggle menu</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>
