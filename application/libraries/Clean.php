<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/* Sterilization Data */
class Clean extends CI_Security{

	function __construct()
	{
		parent::__construct();
		log_message('debug', "Clean Class Initialized");
	}
	
	private function _basic($str)
	{
		if (is_array($str))
		{
			while (list($key) = each($str))
			{
				$str[$key] = $this->user_agent($str[$key]);
			}

			return $str;
		}
		
		$str = mysql_real_escape_string($str);
		$str = htmlspecialchars($str);

		return $str;
	}

	private function _strong($str, $is_SQL = FALSE, $clean_0x = FALSE)
	{
		if (is_array($str))
		{
			while (list($key) = each($str))
			{
				$str[$key] = $this->_strong($str[$key], $clean_0x);
			}

			return $str;
		}

		// %09, %0d, %0a
		$bad = array(
			"%09",
			"%0d",
			"%0a",
			"/*",
			"*/",
		);

		if($is_SQL === FALSE)
		{
			$bad[] = '`';
		}

		// Defence SQL Injection
		if($is_SQL === TRUE)
		{
			$bad[] = "into outfile";
			$bad[] = "terminated";
		}

		// Defence encode Injection
		if($clean_0x === TRUE)
		{
			$bad[] = "0x";
		}

		$str = remove_invisible_characters($str);
		$str = stripslashes(str_replace($bad, '', $str));

		return $str;
	}

	private function _all($str)
	{
		if (is_array($str))
		{
			while (list($key) = each($str))
			{
				$str[$key] = $this->all($str[$key]);
			}

			return $str;
		}

		// %09, %0d, %0a
		$bad = array(
			"../",
			"<!--",
			"-->",
			"<",
			">",
			"'",
			'"',
			'&',
			'$',
			'#',
			'{',
			'}',
			'[',
			']',
			'=',
			';',
			'?',
			'`',
			"%20",
			"%22",
			"%3c",		// <
			"%253c",	// <
			"%3e",		// >
			"%0e",		// >
			"%28",		// (
			"%29",		// )
			"%2528",	// (
			"%26",		// &
			"%24",		// $
			"%3f",		// ?
			"%3b",		// ;
			"%3d",		// =
			"%09",
			"%0d",
			"%0a",
			"0x",// Defence encode Injection
		);
		$str = remove_invisible_characters($str);
		$str = stripslashes(str_replace($bad, '', $str));
		$str = $this->_basic($str);

		return $str;
	}

	/* Defence HTTP_USER_AGENT Injection */
	public function user_agent($str)
	{
		$str = $this->_strong($str);
		$str = $this->_basic($str);

		return $str;
	}
	
	/* Defence SQL Injection */
	public function sql($str)
	{
		$str = $this->_strong($str, TRUE);
		$str = $this->_basic($str);
		$str = $this->xss($str);
		
		return $str;
	}
	
	/* Defence XSS */
	public function xss($str)
	{
		if (is_array($str))
		{
			while (list($key) = each($str))
			{
				$str[$key] = $this->xss($str[$key]);
			}

			return $str;
		}

		$str = $this->_basic($str);
		$str = $this->xss_clean($str);

		return $str;
	}
	
	/* Defence Filename Injection */
	public function filename($str)
	{
		$str = $this->sanitize_filename($str);

		return $str;
	}

	public function get($str)
	{
		//$str = $this->input->get($str);
		$str = $this->_all($str);
		$str = $this->xss($str);

		return $str;
	}

	public function post($str)
	{
		//$str = $this->input->post($str);
		$str = $this->_all($str);
		$str = $this->xss($str);

		return $str;
	}
}
