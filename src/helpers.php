<?php

if(!function_exists('flash')) 
{
	function flash($title = null, $message = null)
	{
	    $flash = app('RaymondWilkinson\SweetalertLaravel\Flash');

	    if(func_num_args() == 0) {
	        return $flash;
	    }

	    return $flash->info($title, $message);
	}
}