<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        View::composer('*', function ($view) {

            $user = Admin::query()->where('id',Auth::id())->first();
            $view->with('user',$user);


//            if (Schema::hasTable('banks')) {
//                $user_bank = CandidatePersonal::query()->where('user_id',1)->first();
//                $view->with('users_bank',$user_bank);
//            }
        });
    }
}
