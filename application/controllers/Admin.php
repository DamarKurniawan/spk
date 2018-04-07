<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->database();
		$this->load->model('admin_model');
		
	}

	public function login(){
		$this->load->view('login');
	}

	public function dashboard()
	{
		$this->load->view('layout/admin_header');
		$this->load->view('index');
		$this->load->view('layout/admin_footer');
	}

	public function index()
	{
		//$this->load->view('index');
		$this->load->view('layout/admin_header');
		$this->load->view('index');
		$this->load->view('layout/admin_footer');
	}

	public function alternatif()
	{
		//$this->load->view('index');
		$data = $this->admin_model->getData('alternatif');
		$data = array('data' => $data);
		$this->load->view('layout/admin_header');
		$this->load->view('alternatif', $data);
		$this->load->view('layout/admin_footer');

	}

	public function sub_kriteria()
	{
		//$this->load->view('index');
		$data = $this->admin_model->getData('sub_kriteria');
		$data = array('data' => $data);
		$this->load->view('layout/admin_header');
		$this->load->view('sub_kriteria',$data);
		$this->load->view('layout/admin_footer');
	}

	public function kriteria()
	{
		//$this->load->view('index');
		$data = $this->admin_model->getData('kriteria');
		$data = array('data' => $data);
		$this->load->view('layout/admin_header');
		$this->load->view('kriteria',$data);
		$this->load->view('layout/admin_footer');
	}

	public function blank()
	{
		//$this->load->view('index');
		$this->load->view('layout/admin_header');
		$this->load->view('layout/admin_footer');
	}

	public function tables()
	{
		//$this->load->view('index')
		$this->load->view('layout/admin_header');
		$this->load->view('tables');
		$this->load->view('layout/admin_footer');
		//echo "wow";
	}

	public function add_alternatif(){
		$this->load->view('layout/admin_header');
		$this->load->view('add_alternatif');
		$this->load->view('layout/admin_footer');
	}

	public function add_kriteria(){
		$this->load->view('layout/admin_header');
		$this->load->view('add_kriteria');
		$this->load->view('layout/admin_footer');
	}

	public function add_sub_kriteria(){

		$data = $this->admin_model->getData('kriteria');
		$data = array('data' => $data);

		$this->load->view('layout/admin_header');
		$this->load->view('add_sub_kriteria',$data);
		$this->load->view('layout/admin_footer');
	}

	public function do_add_alternatif(){

		$config['upload_path'] 		= './assets/img/';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['remove_space']		= TRUE;
		$config['file_name']		= 'img-'.$this->input->post('id');

		$this->load->library('upload',$config);

		if($this->upload->do_upload('alt_gambar'))
		{
			$gambar = $this->upload->data('file_name');
		}
		else
		{
			$gambar = '';
		}

		$data = array(
			'alternatif' => $this->input->post('alt_alternatif'),
			'gambar' => $gambar,
			'deskripsi' => $this->input->post('alt_deskripsi')
		);
		$data = $this->admin_model->addData('alternatif',$data);
		redirect('admin/alternatif');
	}

	public function do_add_kriteria(){
		$data = array(
			'kriteria' => $this->input->post('krit_kriteria'),
			'tipe' => $this->input->post('krit_tipe')
		);	
		$this->admin_model->addData('kriteria',$data);
		redirect('admin/kriteria');
	}

	public function do_add_sub_kriteria(){
		$data = array(
			'id_kriteria' => $this->input->post('subkrit_kriteria'),
			'sub_kriteria' => $this->input->post('subkrit_subKriteria'),
			'nilai' => $this->input->post('subkrit_nilai')
		);	
		$this->admin_model->addData('sub_kriteria',$data);
		redirect('admin/sub_kriteria');
	}

	public function delete_alternatif($id)
	{
		$gambar = $this->admin_model->getAltImage(array('id' => $id));
		$gambar = $gambar[0]['gambar'];

		if($this->admin_model->deleteData('alternatif',array('id'=>$id)))
		{
			unlink('./assets/img/'.$gambar);
		}
		redirect('admin/alternatif');
	}

	public function delete_kriteria($id)
	{
		$this->admin_model->deleteData('kriteria',array('id'=>$id));
		redirect('admin/kriteria');
	} 

	public function delete_sub_kriteria($id)
	{
		$this->admin_model->deleteData('sub_kriteria',array('id'=>$id));
		redirect('admin/sub_kriteria');
	} 

	public function edit_alternatif($id){

		if($id == NULL){
			redirect('admin/alternatif');
		}
		else
		{
			$alternatif = $this->admin_model->getWhere('alternatif', array( 'id' => $id));

			if(empty($alternatif)){
				redirect('admin/alternatif');
			}			
			
				$data = array(
					'id'			=> $alternatif[0]['id'],
					'alternatif' 	=> $alternatif[0]['alternatif'],
					'gambar' 		=> $alternatif[0]['gambar'],
					'deskripsi' 	=> $alternatif[0]['deskripsi']
				);

				$this->load->view('layout/admin_header');
				$this->load->view('edit_alternatif',$data);
				$this->load->view('layout/admin_footer');
			
		}
	}

	public function edit_kriteria($id){

		if($id == NULL){
			redirect('admin/kriteria');
		}
		else
		{
			$kriteria = $this->admin_model->getWhere('kriteria', array( 'id' => $id));

			if(empty($kriteria)){
				redirect('admin/kriteria');
			}			
			
				$data = array(
					'id'		=> $kriteria[0]['id'],
					'kriteria' 	=> $kriteria[0]['kriteria'],
					'tipe' 		=> $kriteria[0]['tipe']
				);

				$this->load->view('layout/admin_header');
				$this->load->view('edit_kriteria',$data);
				$this->load->view('layout/admin_footer');
			
		}
	}

	public function edit_sub_kriteria($id){

		if($id == NULL){
			redirect('admin/sub_kriteria');
		}
		else
		{
			$sub_kriteria = $this->admin_model->getWhere('sub_kriteria', array( 'id' => $id));

			if(empty($sub_kriteria)){
				redirect('admin/sub_kriteria');
			}			
			
				$data = array(
					'id'			=> $sub_kriteria[0]['id'],
					'id_kriteria'	=> $sub_kriteria[0]['id_kriteria'],
					'sub_kriteria' 	=> $sub_kriteria[0]['sub_kriteria'],
					'nilai'	 		=> $sub_kriteria[0]['nilai']
				);

				$data['data'] = $this->admin_model->getData('kriteria');
				$this->load->view('layout/admin_header');
				$this->load->view('edit_sub_kriteria',$data);
				$this->load->view('layout/admin_footer');
			
		}
	}

	public function update_alternatif(){

		$config['upload_path'] 		= './assets/img/';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['remove_space']		= TRUE;
		$config['file_name']		= 'img-'.$this->input->post('alt_id');
		$config['overwrite']		= TRUE;

		$this->load->library('upload', $config);

		if($this->upload->do_upload('alt_gambar_new'))
		{
			$gambar = $this->upload->data('file_name');
		}
		else
		{
			$gambar = $this->input->post('alt_gambar_old');
		}

		$data = array(
			'alternatif' => $this->input->post('alt_alternatif'),
			'gambar'	 => $gambar,
			'deskripsi'  => $this->input->post('alt_deskripsi')
			//'updated_at'	=> date('Y-m-d H:i:s')
		);

		$update = $this->admin_model->updateData('alternatif', $data, array('id' => $this->input->post('alt_id')));

		//error_reporting(E_ALL); 
		//redirect('admin/edit_alternatif/'.$this->input->post('alt_id'));

		 if($update === TRUE){
		 	redirect('admin/edit_alternatif/'.$this->input->post('alt_id'));
		 }
		
	}

	public function update_kriteria(){

		$data = array(
			'kriteria' => $this->input->post('krit_kriteria'),
			'tipe'  => $this->input->post('krit_tipe')
			//'updated_at'	=> date('Y-m-d H:i:s')
		);

		$update = $this->admin_model->updateData('kriteria', $data, array('id' => $this->input->post('krit_id')));

		 if($update === TRUE){
		 	redirect('admin/edit_kriteria/'.$this->input->post('krit_id'));
		 }
		
	}

	public function update_sub_kriteria(){

		$data = array(
			'id_kriteria' => $this->input->post('subkrit_kriteria'),
			'sub_kriteria' => $this->input->post('subkrit_subKriteria'),
			'nilai'		  => $this->input->post('subkrit_nilai')
			//'updated_at'	=> date('Y-m-d H:i:s')
		);

		$update = $this->admin_model->updateData('sub_kriteria', $data, array('id' => $this->input->post('subkrit_id')));

		 if($update === TRUE){
		 	redirect('admin/edit_sub_kriteria/'.$this->input->post('subkrit_id'));
		 }
		
	}
}
