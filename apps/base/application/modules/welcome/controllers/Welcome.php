<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $this->config->load('welcome');
            $this->load->helper('welcome');
            $this->load->library('welcomelib');
            $this->load->model('welcome_model');
            $string = $this->config->item('helo');
            echo $string;
            $string = welcome($string);
            echo "->".$string;
            $string = $this->welcomelib->test($string);
            echo "->".$string;
            $string = $this->welcome_model->test($string);
            echo "->".$string;
            $this->load->view('welcome_message');
	}
        
}
