<?php

namespace App\Livewire\Website\Plans\PlansStepOne\Components;

use App\Livewire\Forms\CustomerSubscriptionForm;
use App\Models\Bag;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class PlansStepOnePersonalInformation extends Component
{


    use HelperTrait;



    // :: variables
    public CustomerSubscriptionForm $instance;
    public $plan;





    public function mount($plan)
    {

        // :: params
        $this->plan = $plan;


    } // end function








    // --------------------------------------------------------------------










    #[On('personalInformationStep')]
    public function remount()
    {




        // :: checkSession
        session('customer') && session('customer')->{'planDays'} ?
            $this->instance = session('customer') :
            $this->redirect(route('website.plans.stepOne', [$this->plan->id]), navigate: true);





    } // end function









    public function continue()
    {








        // 1: appendMissingInformation





        // 1.2: bag
        $bag = Bag::whereIn('name', ['Cool Bag', 'Cooler Bag'])->first();


        $this->instance->bag = $bag->name;
        $this->instance->bagImageFile = $bag->imageFile;
        $this->instance->bagPrice = $bag->price;










        // 1.3: calculateTotalPrice
        $this->instance->totalPrice = $this->instance->totalBundleRangePrice + $this->instance->bagPrice;
        $this->instance->totalCheckoutPrice = $this->instance->totalBundleRangePrice + $this->instance->bagPrice;








        // ----------------------------------
        // ----------------------------------







        // :: continue




        // 2: makeSession
        Session::put('customer', $this->instance);







        // :: redirectStepTwo
        return $this->redirect(route('website.plans.stepTwo', [$this->instance->planId]), navigate: false);





    } // end function

















    // --------------------------------------------------------------------








    public function render()
    {



        return view('livewire.website.plans.plans-step-one.components.plans-step-one-personal-information');


    } // end function



} // end class
