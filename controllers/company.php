<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('company_model');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

	}
	// index page show
	public function index()
	{
		// get companies
		$data['companies'] = $this->company_model->get();
		$data['title'] = 'Company';
		$data['mainContent'] = '/index';
		$this->load->view('template/master', $data, FALSE);
	}
	// create page show
	public function create()
	{
		$data['title'] = 'Add Company';
		$data['mainContent'] = 'add';
		$this->load->view('template/master', $data, FALSE);
	}
	// company add function
	public function store()
	{
		 // validation rule initialize
		 $rules = $this->company_model->rules;
	   	 $this->form_validation->set_rules($rules);
	   	 // run form validation
	     if($this->form_validation->run() == TRUE)
	 	 {
			// get all input in this $input variable
			$input = $this->input->post();
		    $input['created_at'] = $input['updated_at'] = date('Y-m-d H:i:s'); //created and updated at
		    // save 
			$Insert_Id = $this->company_model->save($input);
			$this->session->set_flashdata('message', 'Company Add Successfully..!');
			redirect('company');	
		} else {
		 	// validation error
			$this->session->set_flashdata('message', validation_errors());
			redirect('company/create');
		}

	}
	// compant edit page via id
	public function edit($id)
	{
		$data['company'] = $this->company_model->get($id, TRUE);
		$data['title'] = 'Edit Company';
		$data['mainContent'] = 'edit';
		$this->load->view('template/master', $data, FALSE);
	}
	// company update via id
	public function update($id)
	{
		 // validation rule initialize
		 $rules = $this->company_model->rules;
	   	 $this->form_validation->set_rules($rules);
	   	 // run form validation
	     if($this->form_validation->run() == TRUE)
	 	 {
			// get all input in this $input variable
			$input = $this->input->post();
			$this->company_model->save($input, $id); //save data via id
			$this->session->set_flashdata('message', 'Company Update Successfully..!');
			redirect('company');
		 } else {
		 	// validation error
			$this->session->set_flashdata('message', validation_errors());
			redirect('company/edit'.$id);
		 }
	}
	// update status
	public function status($id)
	{	
		$row = $this->company_model->get($id, TRUE);
		$newStatus = ($row->status == 1) ? 0 : 1;
		$data = array(
				'status' => $newStatus
		);
		$this->company_model->save($data, $id); 
		if ($newStatus == 1) {
			echo "<i class='fa fa-check fa-black fa-border fa-lg'></i>";
		}
		 else {
			echo " <i class='fa fa-times fa-yellow fa-border fa-lg'></i>";
	   }

	}
	// company delete function
	public function delete($id)
	{
		$this->company_model->delete($id);
		echo 1;
	}
	
	

}

/* End of file company.php */
/* Location: ./application/controllers/admin/company.php */