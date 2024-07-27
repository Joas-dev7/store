{{-- @dd($products[0]) --}}
<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid items-end md:grid-cols-2 mb-6">
            <div class="md:text-start text-center">
                <h5 class="font-semibold text-3xl leading-normal mb-4">Trending Items</h5>
                <p class="text-slate-400 max-w-xl">Shop the latest products from the most popular items</p>
            </div>

            <div class="md:text-end hidden md:block">
                <a href="shop-grid.html" class="text-slate-400 hover:text-orange-500">See More Items <i class="mdi mdi-arrow-right"></i></a>
            </div>
        </div><!--end grid-->


        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 pt-6 gap-6">
        
            @foreach ($products as $product)
                <x-product-card :products="$products" />
            @endforeach
        </div><!--end content-->

        <div class="grid grid-cols-1 mt-6">
            <div class="text-center md:hidden block">
                <a href="shop-grid.html" class="text-slate-400 hover:text-orange-500">See More Items <i class="mdi mdi-arrow-right"></i></a>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->