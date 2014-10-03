<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * observaciones controller
 */
class observaciones extends Front_Controller
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
		$this->load->model('observaciones_model', null, true);
		$this->lang->load('observaciones');
		

		Assets::add_module_js('observaciones', 'observaciones.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$records = $this->observaciones_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------



}