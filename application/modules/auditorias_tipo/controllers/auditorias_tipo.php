<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * auditorias_tipo controller
 */
class auditorias_tipo extends Front_Controller
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
		$this->load->model('auditorias_tipo_model', null, true);
		$this->lang->load('auditorias_tipo');
		

		Assets::add_module_js('auditorias_tipo', 'auditorias_tipo.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$records = $this->auditorias_tipo_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------



}