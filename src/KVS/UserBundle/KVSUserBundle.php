<?php

namespace KVS\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KVSUserBundle extends Bundle
{
	public function getParent(){
		return 'FOSUserBundle';
	}
}
