<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * tiendas_tipo controller
 */
class tiendas_tipo extends Front_Controller
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
		$this->load->model('tiendas_tipo_model', null, true);
		$this->lang->load('tiendas_tipo');
		

		Assets::add_module_js('tiendas_tipo', 'tiendas_tipo.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$records = $this->tiendas_tipo_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------

	public function prueba()
	{
		$tipos = $this->tiendas_tipo_model->formato_dropdown();
		var_dump($tipos);
	}

}