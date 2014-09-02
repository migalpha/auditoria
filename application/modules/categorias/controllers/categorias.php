<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * categorias controller
 */
class categorias extends Front_Controller
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
		$this->load->model('categorias_model', null, true);
		$this->lang->load('categorias');
		

		Assets::add_module_js('categorias', 'categorias.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$records = $this->categorias_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------



}