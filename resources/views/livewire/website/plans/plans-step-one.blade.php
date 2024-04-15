{{-- wrapper --}}
<main>









    {{-- wizard - subMenu --}}
    <livewire:website.plans.plans-step.components.sub-menu id='{{ $plan->id }}' key='submenu' />





    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}













    <!-- Main Personalize Section -->
    <section class="main-personalize-sec">
        <div class="container">



            {{-- 1: step - plans --}}
            <div class="row">
                <div class="col-lg-7 offset-lg-5 col-md-6 col-12">
                    <div class='d-block'>
                        <div class="step">



                            {{-- heading - shared --}}
                            <p class="step-heading" type="button" data-bs-toggle="collapse"
                                data-bs-target="#choosePrefrence" aria-expanded="true" aria-controls="choosePrefrence"
                                wire:ignore>
                                <span>
                                    Step 1
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="29" height="27" x="0" y="0"
                                        viewBox="0 0 490.661 490.661" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M453.352 236.091 48.019 1.424c-3.285-1.899-7.36-1.899-10.688 0a10.681 10.681 0 0 0-5.333 9.237v469.333c0 3.819 2.048 7.339 5.333 9.237a10.802 10.802 0 0 0 5.333 1.429c1.856 0 3.691-.469 5.355-1.429l405.333-234.667c3.285-1.92 5.312-5.44 5.312-9.237s-2.027-7.338-5.312-9.236z"
                                                fill="#7dcfa5" opacity="1" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                </span>


                                {{-- subHeading --}}
                                Choose your preferences
                                <span class="icon">
                                    <img src="{{ asset('assets/images/Polygon.png') }}" alt="">
                                </span>
                            </p>
                            {{-- endHeading --}}

                        </div>
                        {{-- end stepHeader --}}












                        {{-- ------------------ --}}
                        {{-- ------------------ --}}









                        {{-- 1.5: step - plans - mobileViewOnly --}}
                        <div class="prefrence-card-box mobile">
                            <div class="collapse show" id="choosePrefrence" wire:ignore.self>
                                <div class="row">



                                    {{-- loop - plans --}}
                                    @foreach ($plans ?? [] as $singlePlan)

                                    <div class="col-lg-4 col-md-6 col-6" key='plan-{{ $singlePlan->id }}'>



                                        {{-- image - name --}}
                                        <div class="prefrence-card @if ($plan->id == $singlePlan->id) active @endif"
                                            style='background-image: url("{{ $storagePath }}/menu/plans/{{ $singlePlan->imageFile }}")'
                                            wire:click='changePlan({{ $singlePlan->id }})'>
                                            <p class="title">{{ $singlePlan->name }}</p>
                                        </div>


                                    </div>

                                    @endforeach
                                    {{-- end loop --}}


                                </div>
                            </div>
                        </div>
                        {{-- end stepContent --}}



                    </div>
                </div>
            </div>
            {{-- endStep --}}













            {{-- ------------------------------------------ --}}
            {{-- ------------------------------------------ --}}
            {{-- ------------------------------------------ --}}
            {{-- ------------------------------------------ --}}













            {{-- mainRow --}}
            <div class="row">









                {{-- :: planInformation --}}
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="side-detail">


                        {{-- imageFile --}}
                        <div class="img-box">
                            <img src='{{ "{$storagePath}/menu/plans/{$plan->imageFile}" }}' class='of-cover'>
                        </div>




                        {{-- information --}}
                        <div class="content-box">


                            {{-- name --}}
                            <h2>{{ $plan->name }}</h2>



                            {{-- breif --}}
                            <p>{{ $plan->desc }}</p>


                            {{-- viewButton --}}
                            <span class="shadow"></span>
                            <a class="green-outline-btn" href="javascript:void(0);" data-bs-toggle="modal"
                                data-bs-target="#plan-details">View Plan Full Detail</a>


                        </div>
                    </div>
                </div>
                {{-- endCol --}}














                {{-- ---------------------------------------------- --}}
                {{-- ---------------------------------------------- --}}
                {{-- ---------------------------------------------- --}}
                {{-- ---------------------------------------------- --}}















                {{-- :: steps --}}
                <div class="col-lg-7 col-md-6 col-12">
                    <div class="personalize-side">






                        {{-- 1: step - plans --}}
                        <div class="prefrence-card-box desktop">
                            <div class="collapse show" id="choosePrefrence" wire:ignore.self>
                                <div class="row">



                                    {{-- loop - plans --}}
                                    @foreach ($plans as $singlePlan)

                                    <div class="col-lg-4 col-md-6 col-6" key='plan-desktop-{{ $plan->id }}'>
                                        <div class="prefrence-card pointer @if ($plan->id == $singlePlan->id) active @endif"
                                            style='background-image: url("{{ $storagePath }}/menu/plans/{{ $singlePlan->imageFile }}")'
                                            wire:click='changePlan({{ $singlePlan->id }})' wire:loading.attr='disabled'>
                                            <p class="title">{{ $singlePlan->name }}</p>
                                        </div>
                                    </div>

                                    @endforeach
                                    {{-- end loop - plans --}}

                                </div>
                            </div>
                        </div>
                        {{-- end step --}}










                        {{-- ---------------------------------------------- --}}
                        {{-- ---------------------------------------------- --}}












                        {{-- 2: step - bundles / ranges --}}
                        <div class="step">




                            {{-- header --}}
                            <p class="step-heading">
                                <span>
                                    Step 2
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="29" height="27" x="0" y="0"
                                        viewBox="0 0 490.661 490.661" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M453.352 236.091 48.019 1.424c-3.285-1.899-7.36-1.899-10.688 0a10.681 10.681 0 0 0-5.333 9.237v469.333c0 3.819 2.048 7.339 5.333 9.237a10.802 10.802 0 0 0 5.333 1.429c1.856 0 3.691-.469 5.355-1.429l405.333-234.667c3.285-1.92 5.312-5.44 5.312-9.237s-2.027-7.338-5.312-9.236z"
                                                fill="#7dcfa5" opacity="1" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                </span>
                                Customize your plan
                            </p>
                            {{-- endHeader --}}









                            {{-- ------------------ --}}
                            {{-- ------------------ --}}








                            {{-- row - bundles --}}
                            <div class="row justify-content-center justify-content-sm-start">


                                {{-- loop - bundles --}}
                                @foreach ($planBundles ?? [] as $planBundle)

                                <div class="col-11 col-sm-6 col-xl-4 mb-md-4">
                                    <label class="check-box action bundle-options w-100">



                                        {{-- input --}}
                                        <input type="radio" name="bundle" class='d-none' value="{{ $planBundle->id }}"
                                            wire:model='instance.planBundleId' wire:change='changeBundle'>


                                        {{-- information --}}
                                        <div class="check-item flex-column">



                                            {{-- cover --}}
                                            <img class='of-cover mb-3 rounded'
                                                src="{{ $storagePath . '/menu/plans/bundles/' . $planBundle->imageFile }}">


                                            {{-- name - remarks --}}
                                            <div>
                                                <p class="title mb-1">{{ $planBundle->name }}</p>
                                                <p class="desc">{{ $planBundle->remarks }}</p>
                                            </div>

                                        </div>




                                    </label>
                                </div>
                                @endforeach
                                {{-- end loop --}}


                            </div>
                            {{-- endRow - bundles --}}














                            {{-- ------------------ --}}
                            {{-- ------------------ --}}









                            {{-- row - ranges --}}
                            <div class="row">


                                {{-- loop - ranges --}}
                                @foreach ($bundleRanges ?? [] as $bundleRange)



                                <div class="col-6 col-sm-4 col-md-6 col-xl-4 mb-3">
                                    <label class="check-box action bundle-options w-100 ">



                                        {{-- input --}}
                                        <input type="radio" name="bundleRange" value="{{ $bundleRange->id }}"
                                            wire:model='instance.bundleRangeId' class='d-none'
                                            wire:change='changeBundleRange'>


                                        {{-- information --}}
                                        <div class="check-item flex-column">


                                            {{-- name - calories --}}
                                            <div>
                                                <p class="title mb-1">{{ $bundleRange->range->name }}</p>
                                                <p class="desc">{{ $bundleRange->range->caloriesRange }} Calorie</p>
                                            </div>

                                        </div>




                                    </label>
                                </div>
                                @endforeach
                                {{-- end loop --}}


                            </div>
                            {{-- endRow - ranges --}}










                        </div>
                        {{-- end step --}}












                        {{-- ---------------------------------------------- --}}
                        {{-- ---------------------------------------------- --}}














                        {{-- 3: step - --}}
                        <div class="step">




                            {{-- heading --}}
                            <p class="step-heading">
                                <span>
                                    Step 3
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="29" height="27" x="0" y="0"
                                        viewBox="0 0 490.661 490.661" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M453.352 236.091 48.019 1.424c-3.285-1.899-7.36-1.899-10.688 0a10.681 10.681 0 0 0-5.333 9.237v469.333c0 3.819 2.048 7.339 5.333 9.237a10.802 10.802 0 0 0 5.333 1.429c1.856 0 3.691-.469 5.355-1.429l405.333-234.667c3.285-1.92 5.312-5.44 5.312-9.237s-2.027-7.338-5.312-9.236z"
                                                fill="#7dcfa5" opacity="1" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                </span>
                                Find Your Fit Plan with nutritionist?
                            </p>
                            {{-- endhHeader --}}









                            {{-- ------------------ --}}
                            {{-- ------------------ --}}







                            {{-- subtitle --}}
                            {{-- <p class="check-label">Would you like to meet with a nutritionist?</p> --}}





                            {{-- A: question --}}
                            <div class="row mb-3">


                                {{-- 1: show --}}
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="check-box action">
                                        <label>
                                            <input type="radio" name="nutrationist" value="1"
                                                onclick="toggleMeetingOptions(this)">
                                            <div class="check-item">
                                                <div>
                                                    <p class="title">Yes</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>



                                {{-- 2: ignore --}}
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="check-box action">
                                        <label>
                                            <input type="radio" name="nutrationist" value="2"
                                                onclick="toggleMeetingOptions(this)">
                                            <div class="check-item">
                                                <div>
                                                    <p class="title">No</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- endPart --}}





                            {{-- B: question --}}
                            <div class="row" id="secondRow" style="display: none;">


                                {{-- 1: in-person --}}
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="check-box action">
                                        <label>
                                            <input type="radio" name="call-option" value="1">
                                            <div class="check-item">
                                                <div class="">
                                                    <p class="title">
                                                        <i class="fal fa-user me-2"></i>Meet in Person
                                                    </p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>



                                {{-- 2: phone --}}
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="check-box action">
                                        <label>
                                            <input type="radio" name="call-option" value="2">
                                            <div class="check-item">
                                                <div class="">
                                                    <p class="title">
                                                        <i class="fal fa-user-headset me-2"></i>Phone Call
                                                    </p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>



                                {{-- 3: videoMeet --}}
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="check-box action">
                                        <label>
                                            <input type="radio" name="call-option" value="3">
                                            <div class="check-item">
                                                <div class="">
                                                    <p class="title">
                                                        <i class="fal fa-video me-2"></i> Video Meeting
                                                    </p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- end partTwo --}}


                        </div>
                        {{-- endStep --}}



















                        {{-- ---------------------------------------------- --}}
                        {{-- ---------------------------------------------- --}}












                        {{-- 4: step - planDuration - days --}}
                        <div class="step">




                            {{-- header --}}
                            <p class="step-heading">
                                <span>
                                    Step 4
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="29" height="27" x="0" y="0"
                                        viewBox="0 0 490.661 490.661" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M453.352 236.091 48.019 1.424c-3.285-1.899-7.36-1.899-10.688 0a10.681 10.681 0 0 0-5.333 9.237v469.333c0 3.819 2.048 7.339 5.333 9.237a10.802 10.802 0 0 0 5.333 1.429c1.856 0 3.691-.469 5.355-1.429l405.333-234.667c3.285-1.92 5.312-5.44 5.312-9.237s-2.027-7.338-5.312-9.236z"
                                                fill="#7dcfa5" opacity="1" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                </span>
                                Your Plan Information
                            </p>
                            {{-- endHeader --}}









                            {{-- ------------------ --}}
                            {{-- ------------------ --}}








                            {{-- row --}}
                            <div class="row">




                                {{-- 4.1: startDate --}}
                                <div class="col-12 col-lg-6" wire:ignore>
                                    <div class="input-group mb-4 w-100 focus">
                                        <input required="" type="text" name="text" autocomplete="off"
                                            class="input date-input w-100 " id="datepicker"
                                            wire:model='instance.startDate' min='{{ $globalTodayDate }}'>
                                        <label class="user-label">Start Date</label>
                                    </div>
                                </div>










                                {{-- 4.2: planDays --}}
                                <div class="col-12 col-lg-6">



                                    <div class="input-group mb-4 w-100 focus" wire:ignore>

                                        <div class="select--single-wrapper">
                                            <select class="form--select planDays--select" id='planDays-select'
                                                data-instance='instance.planDays' required>
                                                <option value=""></option>
                                            </select>
                                        </div>


                                        {{-- label --}}
                                        <label class="user-label">Plan Days</label>

                                    </div>



                                </div>
                                {{-- end planDays --}}












                                {{-- 4.3: loop - weekDays --}}
                                @foreach ($weekDays ?? [] as $weekDay)



                                <div class="col-6 col-sm-4 col-md-6 col-xl-3 mb-2">
                                    <label class="check-box action bundle-options w-100 mb-0">



                                        {{-- input --}}
                                        <input type="checkbox" name="weekDays[]" value="{{ $weekDay }}"
                                            wire:model='instance.deliveryDays' class='d-none'>


                                        {{-- weekDay --}}
                                        <div class="check-item flex-column">
                                            <div>
                                                <p class="title mb-1">{{ $weekDay }}</p>
                                            </div>
                                        </div>



                                    </label>
                                </div>
                                @endforeach
                                {{-- end loop --}}





                            </div>
                            {{-- endRow --}}












                            {{-- ------------------ --}}
                            {{-- ------------------ --}}















                        </div>
                        {{-- end step --}}














                        {{-- ------------------------------------- --}}
                        {{-- ------------------------------------- --}}



















                        {{-- 5: step - allergy - excludes --}}
                        <div class="step">




                            {{-- header --}}
                            <p class="step-heading">
                                <span>
                                    Step 5
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="29" height="27" x="0" y="0"
                                        viewBox="0 0 490.661 490.661" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M453.352 236.091 48.019 1.424c-3.285-1.899-7.36-1.899-10.688 0a10.681 10.681 0 0 0-5.333 9.237v469.333c0 3.819 2.048 7.339 5.333 9.237a10.802 10.802 0 0 0 5.333 1.429c1.856 0 3.691-.469 5.355-1.429l405.333-234.667c3.285-1.92 5.312-5.44 5.312-9.237s-2.027-7.338-5.312-9.236z"
                                                fill="#7dcfa5" opacity="1" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                </span>
                                Manage Your Preferences
                            </p>
                            {{-- endHeader --}}









                            {{-- ------------------ --}}
                            {{-- ------------------ --}}








                            {{-- row --}}
                            <div class="row">





                                {{-- 5.1: allergy --}}
                                <div class="col-12">



                                    <div class="input-group mb-4 w-100 focus" wire:ignore>

                                        <div class="select--single-wrapper">
                                            <select class="form--select" data-instance='instance.allergyLists' multiple>


                                                @foreach ($allergyLists as $allergyList)

                                                <option value="{{ $allergyList->id }}">{{ $allergyList->name }}</option>

                                                @endforeach


                                            </select>
                                        </div>


                                        {{-- label --}}
                                        <label class="user-label">Allergy</label>

                                    </div>



                                </div>
                                {{-- end allergy --}}









                                {{-- 5.2: excludes --}}
                                <div class="col-12">



                                    <div class="input-group mb-4 w-100 focus" wire:ignore>

                                        <div class="select--single-wrapper">
                                            <select class="form--select" data-instance='instance.excludeLists' multiple>

                                                @foreach ($excludeLists as $excludeList)

                                                <option value="{{ $excludeList->id }}">{{ $excludeList->name }}</option>

                                                @endforeach


                                            </select>
                                        </div>


                                        {{-- label --}}
                                        <label class="user-label">Excludes</label>

                                    </div>
                                </div>
                                {{-- end excludes --}}




                            </div>
                            {{-- endRow --}}


                        </div>
                        {{-- end step --}}














                        {{-- ------------------------------------- --}}
                        {{-- ------------------------------------- --}}










                        {{-- :: submitButton --}}
                        <div class="text-end">
                            <button type='button'
                                class="green-btn @if (empty($instance?->bundleRangeId) || empty($instance->planDays) || empty($instance->startDate)) disabled @endif"
                                wire:click='continue' wire:loading.attr='disabled'>Get your plan</button>
                        </div>




                    </div>
                </div>
            </div>
            {{-- endMainRow --}}



        </div>
    </section>
    {{-- endSection --}}














    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}















    <!-- 2: FAQs -->
    <section class="faq-sec light-sec personalize">
        <div class="container">




            {{-- row --}}
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>






            {{-- row --}}
            <livewire:website.home.components.faqs />



        </div>
    </section>
    {{-- endFAQs --}}























    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}








    {{-- 1: datepicker --}}
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.4.0/air-datepicker.min.js"></script>




    <script>
        // 1: handleSelect
        $(".form--select").on("change", function(event) {


         // 1.1: getValue - instance
         selectValue = $(this).select2('val');
         instance = $(this).attr('data-instance');

         @this.set(instance, selectValue);


        }) // end function






        // -------------------------------------------
        // -------------------------------------------







        // 2: toggleMeetingOptions
        function toggleMeetingOptions (element) {

            element.value == 1 ? $("#secondRow").css({'display': 'flex'}) : $("#secondRow").css({'display': 'none'});

        } // end function












        // -------------------------------------------
        // -------------------------------------------






        // 3: defineTodayDate
        startDate = new Date();
        startDate.setDate(startDate.getDate() + 1);




        // 3.5: Initialize
        new AirDatepicker('#datepicker', {
            dateFormat: 'dd/MM/yyyy',
            minDate: startDate,
            position: 'bottom center',
            onSelect: ({date, formattedDate, datepicker}) => {
                @this.set('instance.startDate', formattedDate);
            } // end function
        });




    </script>












    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}














    {{-- modals --}}
    @section('modals')



    {{-- 1: planDetails --}}
    <livewire:website.plans.plans-step-one.components.plans-step-one-overview :$plan
        key='plan-overview-{{ $plan->id }}' />







    {{-- 2: customerDetails --}}
    <livewire:website.plans.plans-step-one.components.plans-step-one-personal-information :$plan
        key='personal-information-{{ $plan->id }}' />





    @endsection
    {{-- endSection --}}







    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}









</main>
{{-- endMain --}}