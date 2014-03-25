<?php

namespace Nas\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NasUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
