<?php

if (!function_exists('dd')) {

	/**
	 * @tracySkipLocation
	 */
	function dd()
	{
		array_map('dump', func_get_args());
		exit();
	}

}
