<?php

namespace App\Routing;

use Annotate\Framework\Routing\IRouteProvider;
use Nette\Application\IRouter;
use Nette\Application\Routers\Route;


class DefaultRouteProvider implements IRouteProvider
{

	public function register(IRouter $router)
	{
		$router[] = new Route(
			'index.php',
			[
				'presenter' => 'Frontend',
				'action' => 'default',
			],
			Route::ONE_WAY
		);

		$router[] = new Route(
			'<presenter>[/<action>]',
			[
				'presenter' => 'Frontend',
				'action' => 'default',
			]
		);
	}

}
