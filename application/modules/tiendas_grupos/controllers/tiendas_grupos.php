<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * tiendas_grupos controller
 */
class tiendas_grupos extends Front_Controller
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
		$this->load->model('tiendas_grupos_model', null, true);
		$this->lang->load('tiendas_grupos');
		

		Assets::add_module_js('tiendas_grupos', 'tiendas_grupos.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$records = $this->tiendas_grupos_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------



}