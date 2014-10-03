<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * preguntas_grupos controller
 */
class preguntas_grupos extends Front_Controller
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
		$this->load->model('preguntas_grupos_model', null, true);
		$this->lang->load('preguntas_grupos');
		

		Assets::add_module_js('preguntas_grupos', 'preguntas_grupos.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$records = $this->preguntas_grupos_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------



}