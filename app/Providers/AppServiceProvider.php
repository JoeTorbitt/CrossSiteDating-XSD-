<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    //public function boot(BladeCompiler $bladeCompiler)
    //{
        //Blade::compiler()->disableEscaping();
        //BladeCompiler::()->disableEscaping();
        //$bladeCompiler->disableEscaping();
    //}

    public function boot()
{

}
}
