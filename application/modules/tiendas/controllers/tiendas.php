<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * tiendas controller
 */
class tiendas extends Front_Controller
{

	//--------------------------------------------------------------------


	/**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('tiendas_model', null, true);
		$this->lang->load('tiendas');
		

		Assets::add_module_js('tiendas', 'tiendas.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$records = $this->tiendas_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------



}