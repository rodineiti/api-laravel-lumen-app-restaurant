<?php

namespace App\Providers;

use App\Address;
use App\Restaurant;
use App\RestaurantPhoto;
use App\RestaurantVote;
use App\Dish;
use App\Observers\AddressObserver;
use App\Observers\RestaurantObserver;
use App\Observers\RestaurantPhotoObserver;
use App\Observers\RestaurantVoteObserver;
use App\Observers\DishObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	public function boot()
	{
        Address::observe(AddressObserver::class);
		Restaurant::observe(RestaurantObserver::class);
        RestaurantPhoto::observe(RestaurantPhotoObserver::class);
        RestaurantVote::observe(RestaurantVoteObserver::class);
        Dish::observe(DishObserver::class);
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
