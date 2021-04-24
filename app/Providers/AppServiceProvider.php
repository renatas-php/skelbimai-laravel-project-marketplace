<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\User;

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
        Schema::defaultStringLength(191);

        View::composer(['product.create', 'product.byCategory', 'partials.nav'], function($view) {
            $view->with('categories', Category::all())->with('subcategories', Subcategory::all());
        });

        View::composer(['index'], function($view) {
            $view->with('categoryObj', new Category());
        });

        View::composer(['partials.notifications'], function($view) {

            $unreadMessages = User::where('id', auth()->id())->first()
            ->unreadNotifications()->where('type', 'App\Notifications\Messages')->latest()->get();

            $unreadNotifications = User::where('id', auth()->id())->first()
            ->unreadNotifications()->where('type', 'App\Notifications\PriceOffers')->latest()->get();

            $view->with('unreadMessages', $unreadMessages)
            ->with('unreadNotifications', $unreadNotifications)
            ->with('userObj', new User());
        });
    }
}
