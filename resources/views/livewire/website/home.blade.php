{{-- wrapper --}}
<main>




    {{-- 1: banner --}}
    <section class="main-banner light-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <div class="owl-carousel owl-theme" id="main-banner-carousel">



                            {{-- 1: slider --}}
                            <div class="main-banner-slide one">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="banner-content-box">


                                            {{-- heading --}}
                                            <h1>
                                                Cheers to a Healthy 2024!
                                            </h1>


                                            {{-- desc --}}
                                            <p class="desc">
                                                Jumpstart your wellness journey with Aleen's personalized meal plans.
                                                <br class="d-none d-lg-block d-md-block" /><span
                                                    class="text-green bold-600 me-1">Get 20% Off</span>Your First Order
                                                using code <span class="text-green bold-600">"START20"</span> <br
                                                    class="d-none d-lg-block d-md-block" />Taste the difference of
                                                nutrition made just for you!
                                            </p>



                                            {{-- actionButton --}}
                                            <a class="green-btn" href="javascript:void(0);">
                                                Get Started
                                            </a>
                                        </div>
                                    </div>



                                    {{-- imageFile --}}
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="img-box">
                                            <img src="{{ asset('assets/images/banner-image.png') }}" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{-- endSlider --}}







                            {{-- ------------------------------- --}}
                            {{-- ------------------------------- --}}







                            {{-- 2: slider --}}
                            <div class="main-banner-slide two">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="banner-content-box">


                                            {{-- heading --}}
                                            <h1>
                                                Crafting Nutritional
                                                Excellence With
                                                Every Dish
                                            </h1>


                                            {{-- description --}}
                                            <p class="desc">
                                                Your Path To Personalized Wellness <br>
                                                Expert Nutritionist Support <br>
                                                Personalized Diet Plans
                                            </p>


                                            {{-- actionButton --}}
                                            <a class="green-btn" href="javascript:void(0);">
                                                Get Started
                                            </a>
                                        </div>
                                    </div>




                                    {{-- imageFile --}}
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="img-box">
                                            <img src="{{ asset('assets/images/banner-image-1.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- endSlider --}}



                        </div>
                    </div>
                    {{-- endBanner --}}


                </div>
            </div>
        </div>
    </section>
    {{-- endSection --}}













    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}










    <!-- 2: mealPlans -->
    <section class="meal-plan-section light-sec">
        <div class="container">



            {{-- heading --}}
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Pick your meal plan</h2>
                    </div>
                </div>
            </div>





            {{-- plansRow --}}
            <div class="row">




                {{-- loop - plans --}}
                @foreach ($plans ?? [] as $key => $plan)



                <div class="col-lg-4 col-md-6 col-6 meal-plan-wrapper">
                    <div class="meal-plan-card @if ($key >= 3 && $key <= 6 || $key >= 6 && $key <= 9) reverse @endif">
                        <div class="img-box">
                            <img src='{{ "{$storagePath}/menu/plans/{$plan->imageFile}"  }}' alt="">
                        </div>


                        {{-- content --}}
                        <div class="content-box">


                            {{-- information --}}
                            <p class="title">{{ $plan->name }}</p>
                            <div class="price-box">
                                <p class="price">AED {{ $plan->startingPrice }}</p>
                                <p class="price-day">Per Day</p>
                            </div>


                            {{-- select --}}
                            <a wire:navigate class="btn" href="{{ route('website.plans.stepOne', [$plan->id]) }}"><i
                                    class="fal fa-play"></i>Select</a>
                        </div>
                    </div>
                </div>



                @endforeach
                {{-- end loop - plans --}}



            </div>
            {{-- end plansRow --}}




        </div>
    </section>
    {{-- endSection --}}
















    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}












    <!-- 3: today's menu -->
    <section class="meal-of-the-day bg-white">
        <div class="container">




            {{-- title / paragraph --}}
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Live Nourishing Picks For The Day</h2>
                        <p> Explore our flavorful meals at Aleen’s in a day. You can have a nutritious breakfast, a
                            satisfying <br class="d-none d-lg-block d-md-block" /> lunch, and a delectable dinner – all
                            crafted to nourish your day from sunrise to sunset.</p>
                    </div>
                </div>
            </div>






            {{-- mealsRow --}}
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme" id="meals-of-day-carsoule">




                        {{-- loop - sampleMeals --}}
                        @foreach ($sampleMeals?? [] as $key => $sampleMeal)



                        <div class="meal-of-day-item orange">
                            <div class="mela-info-box">


                                {{-- name --}}
                                <p class="meal-name px-2">{{ $sampleMeal->meal->name }}</p>


                                {{-- macros --}}
                                <div class="ing-box">
                                    <ul>
                                        <li>
                                            <p class="title">Calories</p>
                                            <p class="desc">1300</p>
                                        </li>
                                        <li>
                                            <p class="title">Protien</p>
                                            <p class="desc">450</p>
                                        </li>
                                        <li>
                                            <p class="title">Carbs</p>
                                            <p class="desc">100</p>
                                        </li>
                                        <li>
                                            <p class="title">Fat</p>
                                            <p class="desc">200</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            {{-- imageFile --}}
                            <img src='{{ "{$storagePath}/menu/meals/{$sampleMeal?->meal?->imageFile}" }}' alt="">


                        </div>



                        @endforeach
                        {{-- end loop - sampleMeals --}}







                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- endSection --}}
















    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}











    <!-- 4: helpSection -->
    <section class="not-sure-sec light-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="not-sure-banner-box">
                        <div class="row">


                            {{-- question --}}
                            <div class="col-lg-8 col-md-6 col-12 order-lg-1 order-md-1 order-2">
                                <div class="content-box">
                                    <h2>Not Sure Which Meal Plan Suits You?</h2>
                                    <a href="javascript:void(0);">
                                        <i class="fal fa-play"></i>Get A Free Diet Consultation
                                    </a>
                                </div>
                            </div>


                            {{-- imageFile --}}
                            <div class="col-lg-4 col-md-6 col-12 order-lg-2 order-md-2 order-1">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/thinking.png') }}" alt="">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- endSection --}}












    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}














    <!-- 5: howItWorks -->
    <section class="how-it-works-sec light-sec" id='howItWorks'>
        <div class="container">
            <div class="row">


                {{-- leftBox --}}
                <div class="col-lg-4 col-12">
                    <div class="how-it-works-heading-box">
                        <h2>How It Works</h2>
                        <p>Set your goal and let us do the work while you enjoy our meals at your convenience</p>
                        <a class="green-btn" href="javascript:void(0);">Get Satrted</a>
                    </div>
                </div>







                {{-- steps --}}
                <div class="col-lg-8 col-12">
                    <div class="row">



                        {{-- 1: selectPlanStep --}}
                        <div class="col-lg-4 col-md-4 col-6">
                            <div class="how-it-works-item green">
                                <img src="{{ asset('assets/images/select-your-meal-plan.png') }}" alt="">
                                <p class="title">Select your meal plan</p>
                                <p class="desc">Select the best meal plan that perfectly aligns with your lifestyle,
                                    fitness goals, and fulfils your daily caloric needs.</p>
                            </div>
                        </div>






                        {{-- 2: weDeliver --}}
                        <div class="col-lg-4 col-md-4 col-6">
                            <div class="how-it-works-item orange">
                                <img src="{{ asset('assets/images/we-deliver.png') }}" alt="">
                                <p class="title">We Deliver</p>
                                <p class="desc">We deliver customized and fresh meals in a cooler bag, constructed by
                                    our dietitian, and prepared by our specialized chefs.</p>
                            </div>
                        </div>




                        {{-- 3: enjoy --}}
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="how-it-works-item green">
                                <img src="assets/images/enjiy.png" alt="">
                                <p class="title">you enjoy</p>
                                <p class="desc">Enjoy your freshly made meals personalized to match your lifestyle. You
                                    can simplyheat and eat your pre-portioned meals.</p>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- endSteps --}}


            </div>
        </div>
    </section>
    {{-- endSection --}}


















    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}













    <!-- 6: overViewSection -->
    <section class="easy-sec light-sec">
        <div class="container">
            <div class="row">


                {{-- coverImage --}}
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="img-box">
                        <img src="https://aleens.ae/assets/images/meal-images/option2-aleens-easy-home.jpg" alt="">
                    </div>
                </div>







                {{-- accordings --}}
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="easy-accordian-box">
                        <div class="accordion" id="easyAccordian">



                            {{-- singleAccoding --}}
                            <div class="accordion-item">


                                {{-- label --}}
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#easycollapseOne" aria-expanded="true"
                                        aria-controls="easycollapseOne">
                                        EASY
                                    </button>
                                </h2>




                                {{-- content --}}
                                <div id="easycollapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#easyAccordian">
                                    <div class="accordion-body">
                                        <p class="text">
                                            Aleen’s offers a wide range of lifestyle healthy meal plans along with free
                                            dietetic consultations. Thereby eliminating the hassle of cooking and
                                            shopping for groceries. The above features work together to enhance your
                                            life whilst promoting better health. We can help you make your life
                                            healthier by providing you with eloquent nutritious choices, lose weight if
                                            needed, build muscle, and manage a health condition when indicated. Our app
                                            covers your plan management as well, whether you would like to freeze,
                                            pause, select your meals, and change your delivery address.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{-- endAccording --}}








                            {{-- singleAccording --}}
                            <div class="accordion-item">


                                {{-- title --}}
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#easycollapseTwo" aria-expanded="false"
                                        aria-controls="easycollapseTwo">
                                        FRESH
                                    </button>
                                </h2>




                                {{-- content --}}
                                <div id="easycollapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#easyAccordian">
                                    <div class="accordion-body">
                                        <p class="text">
                                            Maintaining a healthy diet can often be a challenge, especially when it
                                            comes to ensuring the freshness of the foods we consume. Our services are
                                            fine-tuned to guarantee freshness, by working with high quality ingredients,
                                            along with a daily production and delivery. Leveraging cutting-edge
                                            technologies like blast chilling, we ensure that the food remains not only
                                            nutritious, but also delightfully fresh. We employ skilled chefs who
                                            meticulously prepare each meal to maximize both flavor and nutrition to
                                            preserve the natural goodness of wholesome foods.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{-- endSection --}}










                            {{-- singleAccroding --}}
                            <div class="accordion-item">


                                {{-- titel --}}
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#easycollapseThree" aria-expanded="false"
                                        aria-controls="easycollapseThree">
                                        CHEF PREPARED
                                    </button>
                                </h2>


                                {{-- content --}}
                                <div id="easycollapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#easyAccordian">
                                    <div class="accordion-body">
                                        <p class="text">
                                            Aleen’s team with nutritionists on board has invested considerable time and
                                            effort to create meals that satisfy your taste buds whilst promoting your
                                            overall health. The fusion of culinary experience and nutritional science
                                            bring creativity and passion to create the most appealing of dishes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{-- endAccroding --}}



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- endSection --}}












    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}











    <!-- 7: personalTrainer -->
    <section class="trainer-banner-sec light-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="trainer-banner-box">
                        <div class="row">


                            {{-- cover --}}
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="img-box">
                                    <img src="assets/images/thinking.png" alt="">
                                </div>
                            </div>


                            {{-- col --}}
                            <div class="col-lg-8 col-md-6 col-12">
                                <div class="content-box">


                                    {{-- breif --}}
                                    <h2>Get Fit With Your Personal Trainner</h2>


                                    {{-- bookButton --}}
                                    <a href="javascript:void(0);">
                                        <i class="fal fa-play"></i>Book Your Trainer
                                    </a>

                                </div>
                            </div>
                            {{-- endCol --}}



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- endSection --}}













    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}










    <!-- 8: competitvePrice -->
    <section class="competitive-sec">
        <div class="container">
            <div class="row align-items-center">


                {{-- heading --}}
                <div class="col-12 d-block d-lg-none d-md-none">
                    <div class="section-heading">
                        <h2>COMPETITIVE PRICES</h2>
                        <p>We offer great value for quality meal plans to help you embark on your fitness journey.</p>
                    </div>
                </div>




                {{-- alternateTitle --}}
                <div class="col-lg-8 col-md-6 col-12 order-lg-1 order-md-1 order-2">
                    <div class="section-heading text-start d-none d-lg-block d-md-block">
                        <h2>COMPETITIVE PRICES</h2>
                        <p>We offer great value for quality meal plans to help you embark on your fitness journey.</p>
                    </div>





                    {{-- inner-banner --}}
                    <div class="competitive-slider-box">
                        <div class="owl-carousel owl-theme" id="competitive-carsoule">



                            {{-- singleSlider --}}
                            <div class="competitive-slider-item">
                                <div class="row align-items-center">


                                    {{-- image --}}
                                    <div class="col-3 col-md-3 col-lg-2">
                                        <div class="img-box">
                                            <img src="assets/images/rec-green.png" alt="">
                                        </div>
                                    </div>


                                    {{-- information --}}
                                    <div class="col-9 col-md-9 col-lg-10">
                                        <div class="content-box">
                                            <p class="title">Experienced Dietitians Team</p>
                                            <p class="desc">Our team of dietitians work hand in hand with the kitchen
                                                crew to develop recipes that use fresh, wholesome ingredients that align
                                                with your meal plan preferences.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- end singleSlider --}}






                            {{-- singleSlider --}}
                            <div class="competitive-slider-item">
                                <div class="row align-items-center">


                                    {{-- imageFile --}}
                                    <div class="col-3 col-md-3 col-lg-2">
                                        <div class="img-box">
                                            <img src="assets/images/rec-orange.png" alt="">
                                        </div>
                                    </div>


                                    {{-- information --}}
                                    <div class="col-9 col-md-9 col-lg-10">
                                        <div class="content-box">
                                            <p class="title">Extensive Menu</p>
                                            <p class="desc">Explore over 1000+ recipes that can be personalized and
                                                included in your meal plan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- end singleSlider --}}







                            {{-- singleSlider --}}
                            <div class="competitive-slider-item">
                                <div class="row align-items-center">

                                    {{-- imageFile --}}
                                    <div class="col-3 col-md-3 col-lg-2">
                                        <div class="img-box">
                                            <img src="assets/images/rec-green.png" alt="">
                                        </div>
                                    </div>


                                    {{-- information --}}
                                    <div class="col-9 col-md-9 col-lg-10">
                                        <div class="content-box">
                                            <p class="title">Authentic Marcos</p>
                                            <p class="desc">Calorie details with accurate meal portions prepared with
                                                precision to help you achieve your fitness goals.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            {{-- singleSlider --}}
                            <div class="competitive-slider-item">
                                <div class="row align-items-center">

                                    {{-- imageFile --}}
                                    <div class="col-3 col-md-3 col-lg-2">
                                        <div class="img-box">
                                            <img src="assets/images/rec-orange.png" alt="">
                                        </div>
                                    </div>


                                    {{-- information --}}
                                    <div class="col-9 col-md-9 col-lg-10">
                                        <div class="content-box">
                                            <p class="title">Biodegradable Packaging</p>
                                            <p class="desc">We care about the environment, this is why we use
                                                biodegradable packaging as an eco-friendly option to store your
                                                delivered goods.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>







                            {{-- singleSlider --}}
                            <div class="competitive-slider-item">
                                <div class="row align-items-center">

                                    {{-- imageFile --}}
                                    <div class="col-3 col-md-3 col-lg-2">
                                        <div class="img-box">
                                            <img src="assets/images/rec-green.png" alt="">
                                        </div>
                                    </div>



                                    {{-- information --}}
                                    <div class="col-9 col-md-9 col-lg-10">
                                        <div class="content-box">
                                            <p class="title">Fresh Meals</p>
                                            <p class="desc">This swift delivery process ensures that the food reaches
                                                the customer's doorstep while still at its peak of freshness.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>






                            {{-- singleSlider --}}
                            <div class="competitive-slider-item">
                                <div class="row align-items-center">

                                    {{-- imageFile --}}
                                    <div class="col-3 col-md-3 col-lg-2">
                                        <div class="img-box">
                                            <img src="assets/images/rec-orange.png" alt="">
                                        </div>
                                    </div>


                                    {{-- information --}}
                                    <div class="col-9 col-md-9 col-lg-10">
                                        <div class="content-box">
                                            <p class="title">Competitive Prices</p>
                                            <p class="desc">We offer great value for quality meal plans to help you
                                                embark on your fitness journey.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end innerBanner --}}

                </div>
                {{-- endDiv --}}






                {{-- coverImage --}}
                <div class="col-lg-4 col-md-6 col-12 order-lg-2 order-md-2 order-1">
                    <div class="img-box">
                        <img class="banner-img" src="{{ asset('assets/images/competitive.png') }}" alt="">
                    </div>
                </div>


            </div>
        </div>
    </section>
    {{-- endSection --}}












    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}











    <!-- 9: FAQs -->
    <section class="faq-sec light-sec">
        <div class="container">



            {{-- title --}}
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>





            {{-- FAQs --}}
            <livewire:website.home.components.faqs />



        </div>
    </section>
    {{-- endSection --}}














    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}









    <!-- 10: blogs -->
    <section class="blog-sec light-sec" id='blogs'>
        <div class="container">


            {{-- heading --}}
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Blogs & News</h2>
                        <p>Explore Our Latest Fresh Meal Plan Blogs and Updates</p>
                    </div>
                </div>
            </div>




            {{-- blogsRow --}}
            <div class="row">




                {{-- singleBlog --}}
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-card green">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/blog-1.png') }}" alt="">
                        </div>


                        {{-- mainHeader - subHeader --}}
                        <div class="content-box">
                            <p class="title">THE HOLY MONTH OF RAMADAN:<br class="d-none d-lg-block d-md-block">
                                IFTAR RECOMMENDATIONS FROM O0R<br class="d-none d-lg-block d-md-block">
                                NUTRITIONISTS
                            </p>
                        </div>
                    </div>
                </div>





                {{-- singleBlog --}}
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-card orange">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/blog-2.png') }}" alt="">
                        </div>


                        {{-- mainHeader - subHeader --}}
                        <div class="content-box">
                            <p class="title">
                                FOOD SYNERGY:<br class="d-none d-lg-block d-md-block">
                                THE IMPACT OF PAIRING FOODS FOR<br class="d-none d-lg-block d-md-block">
                                ENHANCED HEALTH
                            </p>
                        </div>
                    </div>
                </div>









                {{-- singleblog --}}
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-card green">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/blog-3.png') }}" alt="">
                        </div>


                        {{-- mainHeader - subHeader --}}
                        <div class="content-box">
                            <p class="title">
                                OPTIMIZING PROTEIN INTAKE:<br class="d-none d-lg-block d-md-block">
                                A GUIDE TO DAILY CONSUMPTION
                            </p>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>
    {{-- endSection --}}











    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}













    <!-- 11: footer -->
    <footer>



        {{-- footerTop --}}
        <div class="footer-top">
            <div class="container">
                <div class="row align-items-center">


                    {{-- subtitle --}}
                    <div class="col-lg-6 col-md-6 col-12">
                        <p class="title">Eat Well, Live Better, Your Choice, Your Meal Plan.</p>
                    </div>



                    {{-- portalLinks --}}
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="button-box">
                            <a class="light-green-btn me-2" href="javascript:void(0);">Login</a>
                            <a class="light-green-btn ms-2" href="javascript:void(0);">Manage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        {{-- footerMiddle --}}
        <div class="footer-main">
            <div class="container">
                <div class="row align-items-center">



                    {{-- logo --}}
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="logo-box">
                            <a href="{{ route('website.home') }}">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>





                    {{-- shortLinks --}}
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="link-box">
                            <ul>
                                <li><a href="{{ route('website.home') }}">Home</a></li>
                                <li><a href="{{ route('website.plans') }}">Meal Plan</a></li>
                                <li><a href="{{ route('website.home') }}#blogs">Blogs</a></li>
                                <li class="border-end-0 p-0 m-0"><a href="javascript:void(0);">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- end shortLinks --}}



                </div>
            </div>
        </div>
        {{-- end footerMiddle --}}










        {{-- footerBottom --}}
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="copyright">
                            <p>&#169; {{ date('Y') }} Aleen's. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="we-accept">
                            <img src="{{ asset('assets/images/card-enhanced.png') }}" alt=""
                                style="height: 56px; width: 125px; object-fit:contain;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- endFooter --}}







</main>
{{-- endMain --}}