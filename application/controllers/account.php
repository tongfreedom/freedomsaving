<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {
	public function index()
	{
		$this->load->view('account/account_view');
	}
}

