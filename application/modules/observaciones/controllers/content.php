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

		$this->auth->restrict('Observaciones.Content.View');
		$this->load->model('observaciones_model', null, true);
		$this->lang->load('observaciones');
		
		Template::set_block('sub_nav', 'content/_sub_nav');

		Assets::add_module_js('observaciones', 'observaciones.js');
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
					$result = $this->observaciones_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('observaciones_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('observaciones_delete_failure') . $this->observaciones_model->error, 'error');
				}
			}
		}

		$records = $this->observaciones_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Observaciones');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a Observaciones object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Observaciones.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_observaciones())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('observaciones_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'observaciones');

				Template::set_message(lang('observaciones_create_success'), 'success');
				redirect(SITE_AREA .'/content/observaciones');
			}
			else
			{
				Template::set_message(lang('observaciones_create_failure') . $this->observaciones_model->error, 'error');
			}
		}
		Assets::add_module_js('observaciones', 'observaciones.js');

		Template::set('toolbar_title', lang('observaciones_create') . ' Observaciones');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Observaciones data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('observaciones_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/observaciones');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Observaciones.Content.Edit');

			if ($this->save_observaciones('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('observaciones_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'observaciones');

				Template::set_message(lang('observaciones_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('observaciones_edit_failure') . $this->observaciones_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Observaciones.Content.Delete');

			if ($this->observaciones_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('observaciones_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'observaciones');

				Template::set_message(lang('observaciones_delete_success'), 'success');

				redirect(SITE_AREA .'/content/observaciones');
			}
			else
			{
				Template::set_message(lang('observaciones_delete_failure') . $this->observaciones_model->error, 'error');
			}
		}
		Template::set('observaciones', $this->observaciones_model->find($id));
		Template::set('toolbar_title', lang('observaciones_edit') .' Observaciones');
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
	private function save_observaciones($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['auditoria_id']        = $this->input->post('observaciones_auditoria_id');
		$data['preguntas_grupos_id']        = $this->input->post('observaciones_preguntas_grupos_id');
		$data['observacion']        = $this->input->post('observaciones_observacion');

		if ($type == 'insert')
		{
			$id = $this->observaciones_model->insert($data);

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
			$return = $this->observaciones_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------


}