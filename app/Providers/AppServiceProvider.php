<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Messages;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
          View::composer('*', function ($view) {

                $unreadCount = 0;

                if (Auth::check()) {
                    $unreadCount = Messages::where('receiver_id', Auth::id())
                        ->where('status', 'unread')
                        ->count();
                }

                $view->with('unreadCount', $unreadCount);
            });   
            }
}
