<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() 
	{
		$data = array(
            'title' => 'Home',
            'isi' => 'home/v_home',
        );
        $this->load->view('layouts/v_wrapper', $data, FALSE);
	}
}