<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->data['subview'] = 'admin/dashboard/index';
		$this->load->view('admin/_layout_main', $this->data);
	}/*end of the index function*/

	public function modal()
	{
		$this->data['subview'] = 'admin/user/login';
		$this->load->view('admin/_layout_modal', $this->data);
	}/*end of the modal function*/

}

/* End of file dashboard.php */
/* Location: ./application/controllers/admin/dashboard.php */