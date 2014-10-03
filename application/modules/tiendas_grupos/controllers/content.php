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

		$this->auth->restrict('Tiendas_Grupos.Content.View');
		$this->load->model('tiendas_grupos_model', null, true);
		$this->lang->load('tiendas_grupos');
		
		Template::set_block('sub_nav', 'content/_sub_nav');

		Assets::add_module_js('tiendas_grupos', 'tiendas_grupos.js');
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
					$result = $this->tiendas_grupos_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('tiendas_grupos_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('tiendas_grupos_delete_failure') . $this->tiendas_grupos_model->error, 'error');
				}
			}
		}

		$records = $this->tiendas_grupos_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Tiendas Grupos');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a Tiendas Grupos object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Tiendas_Grupos.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_tiendas_grupos())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tiendas_grupos_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'tiendas_grupos');

				Template::set_message(lang('tiendas_grupos_create_success'), 'success');
				redirect(SITE_AREA .'/content/tiendas_grupos');
			}
			else
			{
				Template::set_message(lang('tiendas_grupos_create_failure') . $this->tiendas_grupos_model->error, 'error');
			}
		}
		Assets::add_module_js('tiendas_grupos', 'tiendas_grupos.js');

		Template::set('toolbar_title', lang('tiendas_grupos_create') . ' Tiendas Grupos');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Tiendas Grupos data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('tiendas_grupos_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/tiendas_grupos');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Tiendas_Grupos.Content.Edit');

			if ($this->save_tiendas_grupos('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tiendas_grupos_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'tiendas_grupos');

				Template::set_message(lang('tiendas_grupos_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('tiendas_grupos_edit_failure') . $this->tiendas_grupos_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Tiendas_Grupos.Content.Delete');

			if ($this->tiendas_grupos_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tiendas_grupos_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'tiendas_grupos');

				Template::set_message(lang('tiendas_grupos_delete_success'), 'success');

				redirect(SITE_AREA .'/content/tiendas_grupos');
			}
			else
			{
				Template::set_message(lang('tiendas_grupos_delete_failure') . $this->tiendas_grupos_model->error, 'error');
			}
		}
		Template::set('tiendas_grupos', $this->tiendas_grupos_model->find($id));
		Template::set('toolbar_title', lang('tiendas_grupos_edit') .' Tiendas Grupos');
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
	private function save_tiendas_grupos($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['cod_grupo_base']        = $this->input->post('tiendas_grupos_cod_grupo_base');
		$data['descripcion']        = $this->input->post('tiendas_grupos_descripcion');

		if ($type == 'insert')
		{
			$id = $this->tiendas_grupos_model->insert($data);

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
			$return = $this->tiendas_grupos_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------


}