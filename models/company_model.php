<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends MY_Model {

	protected $table_name = 'my0_company';
	protected $primary_key = 'id';

	// form validation
	public $rules = [
		
		'title' => [
			'field' => 'title',
			'label' => 'Title',
			'rules' => 'trim|required|is_unique[my0_company.title]',
		],
		'description' => [
			'field' => 'description',
			'label' => 'Description',
			'rules' => 'trim|required|xss_clean',
		],
		'email' => [
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required|xss_clean|valid_email',
		],
		'phone' => [
			'field' => 'phone',
			'label' => 'Phone',
			'rules' => 'trim|required|xss_clean|numeric',
		],
		'mobile' => [
			'field' => 'mobile',
			'label' => 'Mobile',
			'rules' => 'trim|required|xss_clean|numeric',
		],
		'website' => [
			'field' => 'website',
			'label' => 'Website',
			'rules' => 'trim|required|xss_clean',
		],
		'address' => [
			'field' => 'address',
			'label' => 'Address',
			'rules' => 'trim|required|xss_clean',
		]
	];

}

/* End of file company_model.php */
/* Location: ./application/models/company_model.php */