<!-- Start Navbar -->
        <nav id="topnav" class="defaultscroll is-sticky tagline-height">
            <div class="container relative">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <div>
                        <img src="https://shreethemes.in/cartzio/layouts/assets/images/logo-dark.png" class="h-[22px] inline-block dark:hidden" alt="">
                        <img src="https://shreethemes.in/cartzio/layouts/assets/images/logo-white.png" class="h-[22px] hidden dark:inline-block" alt="">
                    </div>
                </a>
                <!-- End Logo container-->

                <!-- Start Mobile Toggle -->
                <div class="menu-extras">
                    <div class="menu-item">
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Mobile Toggle -->

                <!--Login button Start-->
                <ul class="buy-button list-none mb-0">
                    <li class="dropdown inline-block relative pe-1">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle align-middle inline-flex" type="button">
                            <i data-feather="search" class="size-5"></i>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute overflow-hidden end-0 m-0 mt-5 z-10 md:w-52 w-48 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                            <div class="relative">
                                <i data-feather="search" class="absolute size-4 top-[9px] end-3"></i>
                                <input type="text" class="h-9 px-3 pe-10 w-full border-0 focus:ring-0 outline-none bg-white dark:bg-slate-900 shadow dark:shadow-gray-800" name="s" id="searchItem" placeholder="Search...">
                            </div>
                        </div>
                    </li>

                    <li class="dropdown inline-block relative ps-0.5">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-orange-500 border border-orange-500 text-white" type="button">
                            <i data-feather="shopping-cart" class="h-4 w-4"></i>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-64 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                            <ul class="py-3 text-start" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                        <span class="flex items-center">
                                            <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/trendy-shirt.jpg" class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                            <span class="ms-3">
                                                <span class="block font-semibold">T-shirt (M)</span>
                                                <span class="block text-sm text-slate-400">$320 X 2</span>
                                            </span>
                                        </span>

                                        <span class="font-semibold">$640</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                        <span class="flex items-center">
                                            <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/luxurious-bag2.jpg" class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                            <span class="ms-3">
                                                <span class="block font-semibold">Bag</span>
                                                <span class="block text-sm text-slate-400">$50 X 5</span>
                                            </span>
                                        </span>

                                        <span class="font-semibold">$250</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                        <span class="flex items-center">
                                            <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/apple-smart-watch.jpg" class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                            <span class="ms-3">
                                                <span class="block font-semibold">Watch (Men)</span>
                                                <span class="block text-sm text-slate-400">$800 X 1</span>
                                            </span>
                                        </span>

                                        <span class="font-semibold">$800</span>
                                    </a>
                                </li>

                                <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>

                                <li class="flex items-center justify-between py-1.5 px-4">
                                    <h6 class="font-semibold mb-0">Total($):</h6>
                                    <h6 class="font-semibold mb-0">$1690</h6>
                                </li>

                                <li class="py-1.5 px-4">
                                    <span class="text-center block">
                                        <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center rounded-md bg-orange-500 border border-orange-500 text-white">View Cart</a>
                                        <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center rounded-md bg-orange-500 border border-orange-500 text-white">Checkout</a>
                                    </span>
                                    <p class="text-sm text-slate-400 mt-1">*T&C Apply</p>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="inline-block ps-0.5">
                        <a href="javascript:void(0)" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-orange-500 text-white">
                            <i data-feather="heart" class="h-4 w-4"></i>
                        </a>
                    </li>
            
                    <li class="dropdown inline-block relative ps-0.5">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                            <span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full border border-orange-500 bg-orange-500 text-white"><i data-feather="user" class="h-4 w-4"></i></span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-48 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                            <ul class="py-2 text-start">
                                {{-- <li>
                                    <p class="text-slate-400 pt-2 px-4">Welcome Jesus!</p>
                                </li>
                                <li> --}}
                                    <p class="flex items-center font-medium py-2 px-4"><i data-feather="dollar-sign" class="h-4 w-4 me-2"></i> Balance: <span class="text-orange-500 ms-2">$ 245.10</span></p>
                                </li>
                                <li>
                                    <a href="{{route('dashboard')}}" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-orange-500 dark:hover:text-white"><i data-feather="user" class="h-4 w-4 me-2"></i>Account</a>
                                </li>
                                {{-- <li>
                                    <a href="helpcenter.html" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-orange-500 dark:hover:text-white"><i data-feather="help-circle" class="h-4 w-4 me-2"></i>Helpcenter</a>
                                </li> --}}
                                @auth
                                    <li>
                                        <a href="{{route('profile.edit')}}" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-orange-500 dark:hover:text-white"><i data-feather="settings" class="h-4 w-4 me-2"></i>Profile</a>
                                    </li>
                                    <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                            
                                        <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-orange-500 dark:hover:text-white"><i data-feather="log-out" class="h-4 w-4 me-2"></i>Logout</a>

                                    </form>
                                    <li>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </li><!--end dropdown-->
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li><a href="sale.html" class="sub-menu-item">Accueil</a></li>
                        
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Catégorie</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                @foreach (\App\Models\Category::all() as $category)
                                    <li><a href="{{ route('product.category', $category->id) }}" class="sub-menu-item">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->
