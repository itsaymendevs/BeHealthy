<header>
    <div class="main-nav">
        <nav class="navbar navbar-expand-lg">
            <div class="container">



                {{-- logo --}}
                <a wire:navigate class="navbar-brand" href="{{ route('website.home') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="">
                </a>



                {{-- toggler --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>




                {{-- navLinks --}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">


                        {{-- 1: home --}}
                        <li class="nav-item">
                            <a wire:navigate class="nav-link @if (Request::is('/', '/home')) active @endif"
                                aria-current="page" href="{{ route('website.home') }}">Home</a>
                        </li>






                        {{-- 2: howItWorks --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('website.home') }}#howItWorks">HOW IT WORKS</a>
                        </li>







                        {{-- 3: mealPlans --}}
                        <li class="nav-item">
                            <a wire:navigate class="nav-link @if (Request::is('plans', 'plans/*')) active @endif"
                                href="{{ route('website.plans') }}">MEAL PLANS</a>
                        </li>






                        {{-- 4: dietitation --}}
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);">DIETITIAN</a>
                        </li>







                        {{-- 5: blogs --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('website.home') }}#blogs">BLOGS</a>
                        </li>







                        {{-- 6: contactUs --}}
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);">CONTACT US</a>
                        </li>






                        {{-- 7: login --}}
                        <li class="nav-item">
                            <a class="green-outline-btn" href="javascript:void(0);">LOGIN</a>
                        </li>




                    </ul>
                </div>
                {{-- end navLinks --}}


            </div>
        </nav>
        {{-- endNav --}}




    </div>
</header>
{{-- endHeader --}}