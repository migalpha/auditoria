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

		$this->auth->restrict('Preguntas.Content.View');
		$this->load->model('preguntas_model', null, true);
		$this->load->model('categorias/categorias_model', null, true);
		$this->load->model('preguntas_grupos/preguntas_grupos_model', null, true);
		$this->load->model('preguntas_tipo/preguntas_tipo_model', null, true);
		$this->lang->load('preguntas');
		
		Template::set_block('sub_nav', 'content/_sub_nav');

		Assets::add_module_js('preguntas', 'preguntas.js');
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
					$result = $this->preguntas_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('preguntas_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('preguntas_delete_failure') . $this->preguntas_model->error, 'error');
				}
			}
		}

		$records = $this->preguntas_model->find_all();

		Template::set('records', $records);
		Template::set('categorias', $this->categorias_model->formato_dropdown());
		Template::set('preguntas_tipo', $this->preguntas_tipo_model->formato_dropdown());
		Template::set('preguntas_grupos', $this->preguntas_grupos_model->formato_dropdown());
		Template::set('toolbar_title', 'Manage Preguntas');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a Preguntas object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Preguntas.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_preguntas())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('preguntas_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'preguntas');

				Template::set_message(lang('preguntas_create_success'), 'success');
				redirect(SITE_AREA .'/content/preguntas');
			}
			else
			{
				Template::set_message(lang('preguntas_create_failure') . $this->preguntas_model->error, 'error');
			}
		}
		Assets::add_module_js('preguntas', 'preguntas.js');

		Template::set('toolbar_title', lang('preguntas_create') . ' Preguntas');
		Template::set('categorias', $this->categorias_model->formato_dropdown());
		Template::set('preguntas_tipo', $this->preguntas_tipo_model->formato_dropdown());
		Template::set('preguntas_grupos', $this->preguntas_grupos_model->formato_dropdown());
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Preguntas data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('preguntas_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/preguntas');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Preguntas.Content.Edit');

			if ($this->save_preguntas('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('preguntas_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'preguntas');

				Template::set_message(lang('preguntas_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('preguntas_edit_failure') . $this->preguntas_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Preguntas.Content.Delete');

			if ($this->preguntas_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('preguntas_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'preguntas');

				Template::set_message(lang('preguntas_delete_success'), 'success');

				redirect(SITE_AREA .'/content/preguntas');
			}
			else
			{
				Template::set_message(lang('preguntas_delete_failure') . $this->preguntas_model->error, 'error');
			}
		}
		Template::set('preguntas', $this->preguntas_model->find($id));
		Template::set('toolbar_title', lang('preguntas_edit') .' Preguntas');
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
	private function save_preguntas($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['descripcion']        = $this->input->post('preguntas_descripcion');
		$data['puntuacion']        = $this->input->post('preguntas_puntuacion');
		$data['categoria_id']        = $this->input->post('preguntas_categoria_id');
		$data['deleted']        = $this->input->post('preguntas_deleted');
		$data['tipo_pregunta']        = $this->input->post('preguntas_tipo_pregunta');
		$data['preguntas_grupos_id']        = $this->input->post('preguntas_preguntas_grupos_id');
		$data['orden']        = $this->input->post('preguntas_orden');
		$data['atencion']        = $this->input->post('preguntas_atencion');

		if ($type == 'insert')
		{
			$id = $this->preguntas_model->insert($data);

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
			$return = $this->preguntas_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------


}