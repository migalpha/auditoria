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

		$this->auth->restrict('Auditorias.Content.View');
		$this->load->model('auditorias_model', null, true);
		$this->load->model('tiendas_tipo/tiendas_tipo_model', null, true);
		$this->lang->load('auditorias');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
			Assets::add_css('jquery-ui-timepicker.css');
			Assets::add_js('jquery-ui-timepicker-addon.js');
		Template::set_block('sub_nav', 'content/_sub_nav');

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

		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->auditorias_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('auditorias_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('auditorias_delete_failure') . $this->auditorias_model->error, 'error');
				}
			}
		}

		$records = $this->auditorias_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage auditorias');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a auditorias object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Auditorias.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_auditorias())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('auditorias_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'auditorias');

				Template::set_message(lang('auditorias_create_success'), 'success');
				redirect(SITE_AREA .'/content/auditorias');
			}
			else
			{
				Template::set_message(lang('auditorias_create_failure') . $this->auditorias_model->error, 'error');
			}
		}
		Assets::add_module_js('auditorias', 'auditorias.js');

		Template::set('toolbar_title', lang('auditorias_create') . ' auditorias');
		Template::set('tiendas_tipo', $this->tiendas_tipo_model->formato_dropdown());
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of auditorias data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('auditorias_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/auditorias');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Auditorias.Content.Edit');

			if ($this->save_auditorias('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('auditorias_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'auditorias');

				Template::set_message(lang('auditorias_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('auditorias_edit_failure') . $this->auditorias_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Auditorias.Content.Delete');

			if ($this->auditorias_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('auditorias_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'auditorias');

				Template::set_message(lang('auditorias_delete_success'), 'success');

				redirect(SITE_AREA .'/content/auditorias');
			}
			else
			{
				Template::set_message(lang('auditorias_delete_failure') . $this->auditorias_model->error, 'error');
			}
		}
		Template::set('auditorias', $this->auditorias_model->find($id));
		Template::set('toolbar_title', lang('auditorias_edit') .' auditorias');
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
	private function save_auditorias($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['auditoria_id']        = $this->input->post('auditorias_auditoria_id');
		$data['cod_base']        = $this->input->post('auditorias_cod_base');
		$data['auditor_id']        = $this->input->post('auditorias_auditor_id');
		$data['atendido_por']        = $this->input->post('auditorias_atendido_por');
		$data['cargo']        = $this->input->post('auditorias_cargo');
		$data['puntaje']        = $this->input->post('auditorias_puntaje');
		$data['deleted']        = $this->input->post('auditorias_deleted');
		$data['created_on']        = $this->input->post('auditorias_created_on') ? $this->input->post('auditorias_created_on') : '0000-00-00 00:00:00';
		$data['tipo_tienda_id']        = $this->input->post('auditorias_tipo_tienda_id');

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