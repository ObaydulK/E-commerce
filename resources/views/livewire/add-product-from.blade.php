<!-- Card Section -->
<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="bg-sky-100 rounded-xl shadow p-4 sm:p-7 dark:bg-neutral-900">
    <form wire:submit="save" >
      <!-- Section -->
      <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
        <div class="sm:col-span-12">
          <h2 class="text-lg  font-semibold text-gray-800 dark:text-neutral-200">
            Add New Product
          </h2>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Product Name
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div>
            <input id="af-submit-application-full-name" wire:model="product_name"  type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
           </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-price"  class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            price
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-submit-application-price" wire:model="product_Price" type="number" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
        </div>
        <!-- End Col -->

        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-price"  class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Category
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
         <select wire:model="category_id" name="" id="" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
          <option value="" Selected=" ">Selected Proudcts Category</option>
          @foreach ($all_Categories as $Category)
          <option value="{{$Category->id}}" wire:key="{{$Category->id}}" > {{$Category->name}} </option>
          @endforeach
         </select>
        </div>
        <!-- End Col -->


      </div>
      <!-- End Section -->

      <!-- Section -->
      <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
        <div class="sm:col-span-12">
          <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
            More Details
          </h2>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-resume-cv" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Product Image
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <label for="af-submit-application-resume-cv" class="sr-only">Choose file</label>
          <input type="file" wire:model="photo" name="af-submit-application-resume-cv" id="af-submit-application-resume-cv" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
            file:bg-gray-50 file:border-0
            file:bg-gray-100 file:me-4
            file:py-2 file:px-4
            dark:file:bg-neutral-700 dark:file:text-neutral-400">
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <div class="inline-block">
            <label for="af-submit-application-bio" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
              Product Description
            </label>
          </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <textarea id="af-submit-application-bio" wire:model="product_Description" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6" placeholder="Add a cover letter or anything else you want to share."></textarea>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Section -->


      <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
        Submit and Save
      </button>
    </form>
  </div>
  <!-- End Card -->
</div>
<!-- End Card Section -->