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

		$this->auth->restrict('Respuestas.Content.View');
		$this->load->model('respuestas_model', null, true);
		$this->lang->load('respuestas');
		
		Template::set_block('sub_nav', 'content/_sub_nav');

		Assets::add_module_js('respuestas', 'respuestas.js');
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
					$result = $this->respuestas_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('respuestas_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('respuestas_delete_failure') . $this->respuestas_model->error, 'error');
				}
			}
		}

		$records = $this->respuestas_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Respuestas');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a Respuestas object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Respuestas.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_respuestas())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('respuestas_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'respuestas');

				Template::set_message(lang('respuestas_create_success'), 'success');
				redirect(SITE_AREA .'/content/respuestas');
			}
			else
			{
				Template::set_message(lang('respuestas_create_failure') . $this->respuestas_model->error, 'error');
			}
		}
		Assets::add_module_js('respuestas', 'respuestas.js');

		Template::set('toolbar_title', lang('respuestas_create') . ' Respuestas');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Respuestas data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('respuestas_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/respuestas');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Respuestas.Content.Edit');

			if ($this->save_respuestas('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('respuestas_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'respuestas');

				Template::set_message(lang('respuestas_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('respuestas_edit_failure') . $this->respuestas_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Respuestas.Content.Delete');

			if ($this->respuestas_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('respuestas_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'respuestas');

				Template::set_message(lang('respuestas_delete_success'), 'success');

				redirect(SITE_AREA .'/content/respuestas');
			}
			else
			{
				Template::set_message(lang('respuestas_delete_failure') . $this->respuestas_model->error, 'error');
			}
		}
		Template::set('respuestas', $this->respuestas_model->find($id));
		Template::set('toolbar_title', lang('respuestas_edit') .' Respuestas');
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
	private function save_respuestas($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['auditoria_id']        = $this->input->post('respuestas_auditoria_id');
		$data['pregunta_id']        = $this->input->post('respuestas_pregunta_id');
		$data['valor']        = $this->input->post('respuestas_valor');
		$data['puntuacion']        = $this->input->post('respuestas_puntuacion');
		$data['preguntas_grupos_id']        = $this->input->post('respuestas_preguntas_grupos_id');

		if ($type == 'insert')
		{
			$id = $this->respuestas_model->insert($data);

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
			$return = $this->respuestas_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------


}