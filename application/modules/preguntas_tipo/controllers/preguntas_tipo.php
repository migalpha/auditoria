<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * preguntas_tipo controller
 */
class preguntas_tipo extends Front_Controller
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
		$this->load->model('preguntas_tipo_model', null, true);
		$this->lang->load('preguntas_tipo');
		

		Assets::add_module_js('preguntas_tipo', 'preguntas_tipo.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$records = $this->preguntas_tipo_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------



}