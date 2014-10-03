<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * content controller
 */
class content extends Admin_Controller
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

		$this->auth->restrict('Auditorias_Datos_Cliente_Secreto.Content.View');
		$this->load->model('auditorias_datos_cliente_secreto_model', null, true);
		$this->lang->load('auditorias_datos_cliente_secreto');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
			Assets::add_css('jquery-ui-timepicker.css');
			Assets::add_js('jquery-ui-timepicker-addon.js');
		Template::set_block('sub_nav', 'content/_sub_nav');

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

		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->auditorias_datos_cliente_secreto_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('auditorias_datos_cliente_secreto_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('auditorias_datos_cliente_secreto_delete_failure') . $this->auditorias_datos_cliente_secreto_model->error, 'error');
				}
			}
		}

		$records = $this->auditorias_datos_cliente_secreto_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Auditorias Datos Cliente Secreto');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a Auditorias Datos Cliente Secreto object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Auditorias_Datos_Cliente_Secreto.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_auditorias_datos_cliente_secreto())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('auditorias_datos_cliente_secreto_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'auditorias_datos_cliente_secreto');

				Template::set_message(lang('auditorias_datos_cliente_secreto_create_success'), 'success');
				redirect(SITE_AREA .'/content/auditorias_datos_cliente_secreto');
			}
			else
			{
				Template::set_message(lang('auditorias_datos_cliente_secreto_create_failure') . $this->auditorias_datos_cliente_secreto_model->error, 'error');
			}
		}
		Assets::add_module_js('auditorias_datos_cliente_secreto', 'auditorias_datos_cliente_secreto.js');

		Template::set('toolbar_title', lang('auditorias_datos_cliente_secreto_create') . ' Auditorias Datos Cliente Secreto');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Auditorias Datos Cliente Secreto data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('auditorias_datos_cliente_secreto_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/auditorias_datos_cliente_secreto');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Auditorias_Datos_Cliente_Secreto.Content.Edit');

			if ($this->save_auditorias_datos_cliente_secreto('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('auditorias_datos_cliente_secreto_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'auditorias_datos_cliente_secreto');

				Template::set_message(lang('auditorias_datos_cliente_secreto_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('auditorias_datos_cliente_secreto_edit_failure') . $this->auditorias_datos_cliente_secreto_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Auditorias_Datos_Cliente_Secreto.Content.Delete');

			if ($this->auditorias_datos_cliente_secreto_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('auditorias_datos_cliente_secreto_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'auditorias_datos_cliente_secreto');

				Template::set_message(lang('auditorias_datos_cliente_secreto_delete_success'), 'success');

				redirect(SITE_AREA .'/content/auditorias_datos_cliente_secreto');
			}
			else
			{
				Template::set_message(lang('auditorias_datos_cliente_secreto_delete_failure') . $this->auditorias_datos_cliente_secreto_model->error, 'error');
			}
		}
		Template::set('auditorias_datos_cliente_secreto', $this->auditorias_datos_cliente_secreto_model->find($id));
		Template::set('toolbar_title', lang('auditorias_datos_cliente_secreto_edit') .' Auditorias Datos Cliente Secreto');
		Template::render();
	}

	//--------------------------------------------------------------------

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
	private function save_auditorias_datos_cliente_secreto($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['auditoria_id']        = $this->input->post('auditorias_datos_cliente_secreto_auditoria_id');
		$data['nombre']        = $this->input->post('auditorias_datos_cliente_secreto_nombre');
		$data['apellidos']        = $this->input->post('auditorias_datos_cliente_secreto_apellidos');
		$data['ci']        = $this->input->post('auditorias_datos_cliente_secreto_ci');
		$data['ciudad']        = $this->input->post('auditorias_datos_cliente_secreto_ciudad');
		$data['telefono']        = $this->input->post('auditorias_datos_cliente_secreto_telefono');
		$data['fecha_audit']        = $this->input->post('auditorias_datos_cliente_secreto_fecha_audit') ? $this->input->post('auditorias_datos_cliente_secreto_fecha_audit') : '0000-00-00 00:00:00';
		$data['punt_audit']        = $this->input->post('auditorias_datos_cliente_secreto_punt_audit');

		if ($type == 'insert')
		{
			$id = $this->auditorias_datos_cliente_secreto_model->insert($data);

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
			$return = $this->auditorias_datos_cliente_secreto_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------


}