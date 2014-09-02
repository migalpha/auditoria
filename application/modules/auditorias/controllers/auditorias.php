<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * auditorias controller
 */
class auditorias extends Front_Controller
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
		$this->load->library('users/auth');
		$this->load->model('auditorias_model', null, true);
		$this->load->model('preguntas/preguntas_model', null, true);
		$this->load->model('categorias/categorias_model', null, true);
		$this->load->model('tiendas_tipo/tiendas_tipo_model', null, true);
		$this->load->model('tiendas/tiendas_model', null, true);
		$this->auth->restrict();
		$this->lang->load('auditorias');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
			Assets::add_css('jquery-ui-timepicker.css');
			Assets::add_js('jquery-ui-timepicker-addon.js');

		Assets::add_module_js('auditorias', 'auditorias.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$records = $this->auditorias_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------

	/**
	 * Displays a list of asks.
	 *
	 * @return void
	 */
	public function cuestionario()
	{
		if (isset($_POST['save']))
		{
			foreach ($this->input->post() as $key => $value)
			{
				if (substr($key, 0,1)=="p")
				{
					echo $key." => ".$value."<br>";
				}
			}
		}

		Template::set('preguntas', $this->preguntas_model->find_all_by('deleted',0));
		Template::set('categorias', $this->categorias_model->find_all_by('deleted',0));
		Template::render();
	}

	//--------------------------------------------------------------------

	/**
	 * Displays a form for create a auditory.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->crear_user();
		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_auditorias())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('auditorias_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'auditorias');

				Template::set_message('La auditoría se creó satisfactoriamente', 'success');
				redirect( site_url('/auditorias/cuestionario/'.$insert_id));
			}
			else
			{
				Template::set_message(lang('auditorias_create_failure') . $this->auditorias_model->error, 'error');
			}
		}

		Template::set('tiendas',  $this->tiendas_model->tiendas_dropdown());
		Template::set('tiendas_tipo', $this->tiendas_tipo_model->formato_dropdown());
		Template::render();
	}

	//--------------------------------------------------------------------
	/**
	*Setea los datos del usuario logueado
	*
	*
	*/
	public function crear_user()
	{
		 if ($this->auth->is_logged_in() )
		 {
		 	$this->set_current_user();
		 }
	}
	//---------------------------------------------------------------------------
	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/**
	 * Summary
	 *
	 * @param String $type Either "insert" or "update"
	 * @param Int	 $id	The ID of the record to update, ignored on inserts
	 *
	 * @return Mixed    An INT id for successful inserts, TRUE for successful updates, else FALSE
	 */
	private function save_auditorias($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		$this->form_validation->set_rules('auditorias_cod_base','Codigo Base','required|xss_clean|max_length[4]');
		$this->form_validation->set_rules('auditorias_auditor_id','Auditor','required|xss_clean|max_length[3]');
		$this->form_validation->set_rules('auditorias_atendido_por','Atendido por:','trim|required|xss_clean|max_length[255]');
		$this->form_validation->set_rules('auditorias_cargo','Cargo:','trim|required|xss_clean|max_length[255]');
		$this->form_validation->set_rules('auditorias_tipo_tienda_id','Tipo de Tienda','required|xss_clean|max_length[3]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want

		$data = array();
		
		$data['cod_base']       	= $this->input->post('auditorias_cod_base');
		$data['auditoria_id'] 		= $this->input->post('auditorias_cod_base').str_pad($this->input->post('auditorias_auditor_id'),3,'0', STR_PAD_LEFT).date('dmY');
		$data['auditor_id']     	= str_pad($this->input->post('auditorias_auditor_id'),3,'0', STR_PAD_LEFT);
		$data['atendido_por']   	= $this->input->post('auditorias_atendido_por');
		$data['cargo']        		= $this->input->post('auditorias_cargo');
		$data['tipo_tienda_id'] 	= $this->input->post('auditorias_tipo_tienda_id');

		if ($type == 'insert')
		{
			$id = $this->auditorias_model->insert($data);

			if (is_numeric($id))
			{
				$return = $id;
			}
			else
			{
				$return = FALSE;
			}
		}
		elseif ($type == 'update')
		{
			$return = $this->auditorias_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------
}