<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Verify {

	function __construct()
	{
		log_message('debug', "Verify Class Initialized");
	}

	/* Valid Controller Method */
    public function controller_method(&$obj, $methods)
    {
		if(!$obj | !$methods)
		{
			$_error_msg = 'Myverification::is_valid_method params error!';
			log_message('error', $_error_msg);
			show_error($_error_msg);
		}
		$_method = $obj->router->method;
		if(!method_exists($obj, $_method) || !in_array($_method, $methods))
		{
			show_404();
		}
    }
}
