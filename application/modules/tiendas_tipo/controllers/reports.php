<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * reports controller
 */
class reports extends Admin_Controller
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

		$this->auth->restrict('Tiendas_Tipo.Reports.View');
		$this->load->model('tiendas_tipo_model', null, true);
		$this->lang->load('tiendas_tipo');
		
		Template::set_block('sub_nav', 'reports/_sub_nav');

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

		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->tiendas_tipo_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('tiendas_tipo_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('tiendas_tipo_delete_failure') . $this->tiendas_tipo_model->error, 'error');
				}
			}
		}

		$records = $this->tiendas_tipo_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Tiendas Tipo');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a Tiendas Tipo object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Tiendas_Tipo.Reports.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_tiendas_tipo())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tiendas_tipo_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'tiendas_tipo');

				Template::set_message(lang('tiendas_tipo_create_success'), 'success');
				redirect(SITE_AREA .'/reports/tiendas_tipo');
			}
			else
			{
				Template::set_message(lang('tiendas_tipo_create_failure') . $this->tiendas_tipo_model->error, 'error');
			}
		}
		Assets::add_module_js('tiendas_tipo', 'tiendas_tipo.js');

		Template::set('toolbar_title', lang('tiendas_tipo_create') . ' Tiendas Tipo');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Tiendas Tipo data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('tiendas_tipo_invalid_id'), 'error');
			redirect(SITE_AREA .'/reports/tiendas_tipo');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Tiendas_Tipo.Reports.Edit');

			if ($this->save_tiendas_tipo('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tiendas_tipo_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'tiendas_tipo');

				Template::set_message(lang('tiendas_tipo_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('tiendas_tipo_edit_failure') . $this->tiendas_tipo_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Tiendas_Tipo.Reports.Delete');

			if ($this->tiendas_tipo_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tiendas_tipo_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'tiendas_tipo');

				Template::set_message(lang('tiendas_tipo_delete_success'), 'success');

				redirect(SITE_AREA .'/reports/tiendas_tipo');
			}
			else
			{
				Template::set_message(lang('tiendas_tipo_delete_failure') . $this->tiendas_tipo_model->error, 'error');
			}
		}
		Template::set('tiendas_tipo', $this->tiendas_tipo_model->find($id));
		Template::set('toolbar_title', lang('tiendas_tipo_edit') .' Tiendas Tipo');
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
	private function save_tiendas_tipo($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['descripcion']        = $this->input->post('tiendas_tipo_descripcion');

		if ($type == 'insert')
		{
			$id = $this->tiendas_tipo_model->insert($data);

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
			$return = $this->tiendas_tipo_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------


}