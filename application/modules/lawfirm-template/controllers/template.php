<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller {

	public function index()
	{
            $this->load->view('template_view');
	}
        
        public function create(){
            $this->load->view('template_create');
        }
}
