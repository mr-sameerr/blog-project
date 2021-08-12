<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\User;

class GetUserComposer{
	
	public function compose(View $view){

		$getUser = User::findOrFail( 1);

		$view->with('getUser', $getUser);
	}

}
