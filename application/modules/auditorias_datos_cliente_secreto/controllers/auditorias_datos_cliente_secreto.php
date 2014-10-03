<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * auditorias_datos_cliente_secreto controller
 */
class auditorias_datos_cliente_secreto extends Front_Controller
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
		$this->load->model('auditorias_datos_cliente_secreto_model', null, true);
		$this->lang->load('auditorias_datos_cliente_secreto');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
			Assets::add_css('jquery-ui-timepicker.css');
			Assets::add_js('jquery-ui-timepicker-addon.js');

		Assets::add_module_js('auditorias_datos_cliente_secreto', 'auditorias_datos_cliente_secreto.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$records = $this->auditorias_datos_cliente_secreto_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------



}