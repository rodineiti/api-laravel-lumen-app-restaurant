<?php

namespace App\Observers;

use App\Restaurant;
use App\RestaurantVote;

class RestaurantVoteObserver
{
	public function creating(RestaurantVote $model)
	{
		// executa uma query no banco que pega a pontuação média
		$points = $model
			->where('restaurant_id', $model->restaurant_id)
			->avg('points');

		$restaurant = Restaurant::find($model->restaurant_id);
		$restaurant->points = $points;
		$restaurant->votes_qtd += 1;
		$restaurant->update();
	}
}