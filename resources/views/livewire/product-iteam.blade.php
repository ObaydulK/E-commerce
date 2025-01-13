<div>
     @if (Request::is('all/products') || Request::is('livewire/update'))
           @include('components.search-component')
      @endif
     <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">

          @if (count($products) > 0)
                 @foreach ($products as $product)
                          <livewire:item-card lazy :product_details="$product" wire:key="{{$product->id}}" />
                     @endforeach
            @else
                      <h1>NO PROduCT Availab !!</h1>
                 @endif

     </div>
</div>