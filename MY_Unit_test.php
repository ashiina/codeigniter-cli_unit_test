<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/**
 * Cli_unit_test
 *
 * A CodeIgniter library extending the unit_test library, for CLI output.
 *
 * @package             CodeIgniter
 * @category            Libraries
 * @author              ashiina
 * @link                        https://github.com/ashiina/codeigniter-my_unit_test
 * @license         http://www.opensource.org/licenses/mit-license.html
 * 
 * Copyright (c) 2013 Ahmad Shiina and contributers
 */
class My_unit_test extends CI_Unit_test {

	public function __construct($params=null)
	{
		parent::__construct();
		$this->CI =& get_instance();
	}

	/**
	 * Generate a cli_report
	 *
	 * Displays an output for CLI, formatted with colors
	 *
	 * @access	public
	 * @return	string
	 */
	public function cli_report($result = array()) {
		if (count($result) == 0)
		{
			$result = $this->result();
		}

		$r;
		$r .= "[Test results] : ".$result[0]['File Name']."\n";

		$mask = "%-60.80s \t %-20.20s \t %-20.20s \t %-5.20s \t %-20.40s \n";

		$r .= "\033[44m";
		$r .= sprintf($mask, 
			'Test Name',
			'Test Datatype',
			'Expected Datatype',
			'Result',
			'Notes'
		);
		$r .= "\033[0m";

		foreach ($result as $row) {
			$resultStr;
			if ($row['Result'] === 'Passed') {
				$resultStr = "\033[0;32m".$row['Result']."\033[0m";
			} else {
				$resultStr = "\033[0;31m".$row['Result']."\033[0m";
			}

			$r .= sprintf($mask,
				$row['Test Name'],
				$row['Test Datatype'],
				$row['Expected Datatype'],
				$resultStr,
				$row['Notes']
			);
		}

		return $r;
	}


}


