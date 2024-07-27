<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Cartzio - Fashion Store eCommerce Tailwind CSS Landing Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Fashion Store eCommerce Tailwind CSS Landing Template" name="description">
        <meta content="Shop, Fashion, eCommerce, Cart, Shop Cart, tailwind css, Admin, Landing" name="keywords">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="1.0.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="https://shreethemes.in/cartzio/layouts/assets/images/favicon.ico">

        <!-- Css -->
        <link href="https://shreethemes.in/cartzio/layouts/assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="https://shreethemes.in/cartzio/layouts/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link href="https://shreethemes.in/cartzio/layouts/assets/css/tailwind.min.css" rel="stylesheet" type="text/css">

    </head>
    
    <body class="dark:bg-slate-900">
        
        @include('layouts.shop.header')
        
        @yield('content')

        @include('layouts.shop.footer')

        <!-- Switcher -->
        <div class="fixed top-1/4 -left-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i data-feather="moon" class="w-[18px] h-[18px] text-yellow-500"></i>
                    <i data-feather="sun" class="w-[18px] h-[18px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -left-3 z-50">
            <a href="" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code --> 

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-orange-500 text-white justify-center items-center"><i class="mdi mdi-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
        <script src="https://shreethemes.in/cartzio/layouts/assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="https://shreethemes.in/cartzio/layouts/assets/libs/feather-icons/feather.min.js"></script>
        <script src="https://shreethemes.in/cartzio/layouts/assets/js/plugins.init.js"></script>
        <script src="https://shreethemes.in/cartzio/layouts/assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>