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

		$this->auth->restrict('Tiendas.Content.View');
		$this->load->model('tiendas_model', null, true);
		$this->lang->load('tiendas');
		
		Template::set_block('sub_nav', 'content/_sub_nav');

		Assets::add_module_js('tiendas', 'tiendas.js');
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
					$result = $this->tiendas_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('tiendas_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('tiendas_delete_failure') . $this->tiendas_model->error, 'error');
				}
			}
		}

		$records = $this->tiendas_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Tiendas');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a Tiendas object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Tiendas.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_tiendas())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tiendas_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'tiendas');

				Template::set_message(lang('tiendas_create_success'), 'success');
				redirect(SITE_AREA .'/content/tiendas');
			}
			else
			{
				Template::set_message(lang('tiendas_create_failure') . $this->tiendas_model->error, 'error');
			}
		}
		Assets::add_module_js('tiendas', 'tiendas.js');

		Template::set('toolbar_title', lang('tiendas_create') . ' Tiendas');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Tiendas data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('tiendas_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/tiendas');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Tiendas.Content.Edit');

			if ($this->save_tiendas('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tiendas_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'tiendas');

				Template::set_message(lang('tiendas_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('tiendas_edit_failure') . $this->tiendas_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Tiendas.Content.Delete');

			if ($this->tiendas_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tiendas_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'tiendas');

				Template::set_message(lang('tiendas_delete_success'), 'success');

				redirect(SITE_AREA .'/content/tiendas');
			}
			else
			{
				Template::set_message(lang('tiendas_delete_failure') . $this->tiendas_model->error, 'error');
			}
		}
		Template::set('tiendas', $this->tiendas_model->find($id));
		Template::set('toolbar_title', lang('tiendas_edit') .' Tiendas');
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
	private function save_tiendas($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['cod_base']        = $this->input->post('tiendas_cod_base');
		$data['nombre']        = $this->input->post('tiendas_nombre');
		$data['empresa']        = $this->input->post('tiendas_empresa');

		if ($type == 'insert')
		{
			$id = $this->tiendas_model->insert($data);

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
			$return = $this->tiendas_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------


}