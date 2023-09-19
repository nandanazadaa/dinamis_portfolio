<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Zada Portfolio';
		$data['update_text_title']=$this->db->get('change_text_title')->row_array();
		$data['text_skill']=$this->db->get('change_text_skills')->row_array();
		
		$this->load->view('Home/home',$data);
	}
}
