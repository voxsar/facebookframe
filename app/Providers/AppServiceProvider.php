<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Collection;
use App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //$menus = array('name' => ['name' => 'sdsd']);
        $menus = App\Menu::where('is_hidden', 0)
                ->where('is_admin', 0)
                ->get();
        View::share('menus',  $menus);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
