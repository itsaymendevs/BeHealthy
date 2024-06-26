<?php

namespace App\Providers;

use App\Traits\HelperTrait;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{


    use HelperTrait;



    public function register() : void
    {


    } // end function






    // -------------------------------------------------------------------




    public function boot() : void
    {


        // 1: defaultPreview
        View::share('defaultPreview', url('assets/img/placeholder.png'));
        View::share('defaultPlate', "plate.png");
        View::share('defaultIngredient', "ingredient.png");








        // 1.2: globalCurrentDate - nextDate
        View::share('globalCurrentDate', $this->getCurrentDate());
        View::share('globalNextDate', $this->getNextDate());





        // 1.3: globalCounter
        View::share('globalSNCounter', 1);







        // 1.5: storagePath
        View::share('storagePath', env('APP_STORAGE'));


    } // end function



} // end provider



