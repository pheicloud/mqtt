<?php

namespace Pheicloud\Pheimqtt\Facades;

use Illuminate\Support\Facades\Facade;

class Pheimqtt extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'pheimqtt';
	}
}
