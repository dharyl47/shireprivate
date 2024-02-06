<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

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
	 
	 public function __construct() {
        parent::__construct();
		//$this->load->model('admin/ajax_model');
		if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }
	 
	public function index()
	{
		echo "this is ajax page";
		die();
	}
	 
	public function create_url($name)
	{
		$url=strtolower(str_replace(' ', '-',str_replace('&', 'and', str_replace('/', '-',str_replace("'", '-',str_replace(",", '',

str_replace('"', '',str_replace('(', '',str_replace(')', '',(str_replace(':', '',(str_replace('.', '',(str_replace('!', '',(str_replace('+', '',(str_replace('*', '',($name))))))))))))))))))));

		echo strtolower(str_replace('--', '-',str_replace('%20', '-',$url)));
		
		
	}
	
	
	
}
