<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * preguntas controller
 */
class preguntas extends Front_Controller
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
		$this->load->model('preguntas_model', null, true);
		$this->lang->load('preguntas');
		

		Assets::add_module_js('preguntas', 'preguntas.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$records = $this->preguntas_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------



}