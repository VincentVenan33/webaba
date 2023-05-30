<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\ContactModel;


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
        // Menggunakan variabel $unread_count di semua tampilan
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $data = array();
                $unread_count = ContactModel::where('status', 0)->count();
                $view->with('unread_count', $unread_count);
                $data['unread_count'] = $unread_count;
            }
        });
    }
}