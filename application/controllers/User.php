<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
                $this->load->view('template/admin/header');
                $this->load->view('template/admin/sidebar');
                $this->load->view('template/admin/topnavigation');
                $this->load->view('template/admin/content');
                $this->load->view('template/admin/footer');
                $this->load->view('template/admin/script');
	}
}
