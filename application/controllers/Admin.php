<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] = 'Dashboard';

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Templates/sidebar',$data);
		$this->load->view('Admin/dashboard',$data);
		$this->load->view('Templates/footer',$data);
	}

	public function logo()
	{
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['update_text_title']=$this->db->get('change_text_title')->row_array();

		$data['title'] = 'Change Text Title';

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Templates/sidebar',$data);
		$this->load->view('Admin/chnage_logo',$data);
		$this->load->view('Templates/footer',$data);
	}

	public function text_title()
	{
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['update_text_title']=$this->db->get('change_text_title')->row_array();

		$data['title'] = 'Change Text Title';

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Templates/sidebar',$data);
		$this->load->view('Admin/text_title',$data);
		$this->load->view('Templates/footer',$data);
	}

	public function change_text_title()
	{
		$data = [
            'text_nama' => $this->input->post('change_nama'),
            'text_profesi' => $this->input->post('change_profesi'),
		];
		$this->db->where('id', 1);
		$this->db->update('change_text_title', $data);
		$this->session->set_flashdata('text_update', '<div class="alert alert-success" role="alert"> Text telah Terupdate! </div>');
		redirect('Admin/text_title');
	}

	public function text_skills(){

		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['text_skill']=$this->db->get('change_text_skills')->row_array();

		$data['title'] = 'Change Text Title';

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Templates/sidebar',$data);
		$this->load->view('Admin/text_skills',$data);
		$this->load->view('Templates/footer',$data);
	}

	public function change_text_skills()
	{
		$data = [
            'subtitle' => $this->input->post('change_subtitle'),
            'title' => $this->input->post('change_title'),
            'deskripsi' => $this->input->post('change_deskripsi'),
		];
		$this->db->where('id', 1);
		$this->db->update('change_text_skills', $data);
		$this->session->set_flashdata('text_update', '<div class="alert alert-success" role="alert"> Text telah Terupdate! </div>');
		redirect('Admin/text_skills');
	}

}
