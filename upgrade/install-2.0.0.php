<?php

if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_2_0_0($object)
{
	if (version_compare(_PS_VERSION_, '1.6.0.11', '>=') === true)
		return $this->registerHook('displayCustomerIdentityForm');

	return true;
}
