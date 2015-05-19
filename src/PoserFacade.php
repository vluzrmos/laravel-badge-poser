<?php

namespace Vluzrmos\BadgePoser;


use Illuminate\Support\Facades\Facade;

class PoserFacade extends Facade
{

	protected static function getFacadeAccessor(){
		return 'Vluzrmos\BadgePoser\Contracts\Poser';
	}

}
