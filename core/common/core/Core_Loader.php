<?php

require COMMONPATH . "third_party/MX/Loader.php";

class Core_Loader extends MX_Loader
{

	/**
	 * CORE LOAD CONSTRUCTOR
	 * 
	 * Assigns all CI paths to allos common functionality
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->_ci_library_paths = array(APPPATH, COMMONPATH, BASEPATH);
		$this->_ci_helper_paths = array(APPPATH, COMMONPATH, BASEPATH);
		$this->_ci_model_paths = array(APPPATH, COMMONPATH);
		$this->_ci_view_paths = array(APPPATH . 'views/' => TRUE, COMMONPATH . 'views/' => TRUE);
		$this->config->_config_paths = array(APPPATH, COMMONPATH);
	}

}
