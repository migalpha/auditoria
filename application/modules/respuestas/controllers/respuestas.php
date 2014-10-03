<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * respuestas controller
 */
class respuestas extends Front_Controller
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
		$this->load->model('respuestas_model', null, true);
		$this->lang->load('respuestas');
		

		Assets::add_module_js('respuestas', 'respuestas.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$records = $this->respuestas_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------



}